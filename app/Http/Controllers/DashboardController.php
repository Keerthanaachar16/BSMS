<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
 public function index()
    {
        // Get today's complaints count
        $todayComplaints = Complaint::whereDate('created_at', Carbon::today())->count();

        // Get total complaints count
        $totalComplaints = Complaint::count();

          // Get last 7 days (week wise) complaint stats
        $weekComplaints = DB::table('complaints')
            ->selectRaw('DATE(created_at) as date,
                        SUM(CASE WHEN complaint_status = "pending" THEN 1 ELSE 0 END) as pending,
                        SUM(CASE WHEN complaint_status = "In progress" THEN 1 ELSE 0 END) as Inprogress,
                        SUM(CASE WHEN complaint_status = "Resolved" THEN 1 ELSE 0 END) as Resolved')
            ->where('updated_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return view('dashboard', compact('todayComplaints', 'totalComplaints', 'weekComplaints'));

        // return view('dashboard', compact('todayComplaints', 'totalComplaints'));
    }
}

