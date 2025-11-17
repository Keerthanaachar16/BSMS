<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Officials;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Eager load officials to avoid N+1
        $query = Complaint::with('officials');

        // Date filter (handle partial dates and include entire to-day)
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $from = Carbon::parse($request->from_date)->startOfDay();
            $to   = Carbon::parse($request->to_date)->endOfDay();

            if ($from->gt($to)) {
                return back()->with('error', 'To Date must be greater than or equal to From Date.');
            }

            $query->whereBetween('created_at', [$from, $to]);
        } elseif ($request->filled('from_date')) {
            $from = Carbon::parse($request->from_date)->startOfDay();
            $query->where('created_at', '>=', $from);
        } elseif ($request->filled('to_date')) {
            $to = Carbon::parse($request->to_date)->endOfDay();
            $query->where('created_at', '<=', $to);
        }

        // Ward filter
        if ($request->filled('ward')) {
            $query->where('ward', $request->ward);
        }

        // Status filter
        if ($request->filled('complaint_status')) {
            $query->where('complaint_status', $request->complaint_status);
        }

        // Official filter via pivot relationship
        if ($request->filled('official_id')) {
            $officialId = $request->official_id;
            $query->whereHas('officials', function ($q) use ($officialId) {
                // use officials.id to be explicit
                $q->where('officials.id', $officialId);
            });
        }

        $complaints = $query->orderBy('created_at', 'desc')->get();

        // Pass officials list to the view for the dropdown
        $officials = Officials::orderBy('name')->get();

        return view('reports', compact('complaints', 'officials'));
    }
}