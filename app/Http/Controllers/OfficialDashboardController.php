<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Carbon\Carbon;

class OfficialDashboardController extends Controller
{
     public function index()
    {
        // Get today's complaints count
        $todayComplaints = Complaint::whereDate('created_at', Carbon::today())->count();

        // Get total complaints count
        $totalComplaints = Complaint::count();

        return view('official_dashboard', compact('todayComplaints', 'totalComplaints'));
    }
    // public function checkNewComplaint()
    // {
    //     $officialId = auth()->id(); 
    //     $official = \App\Models\Officials::find($officialId);

    //     return response()->json([
    //         'assigned_complaint_id' => $official->assigned_complaint_id
    //     ]);
    // }

    public function checkNewComplaint()
{
    $officialId = auth()->id();
    $official = \App\Models\Officials::with('complaints')->find($officialId);

    return response()->json([
        'assigned_complaints' => $official->complaints->map(function($complaint) {
            return [
                'id' => $complaint->id,
                // 'status' => $complaint->complaint_status,
                // 'ward' => $complaint->ward,
                'Assigned_at' => $complaint->created_at->format('d-m-Y H:i')
            ];
        })
    ]);
}
}
