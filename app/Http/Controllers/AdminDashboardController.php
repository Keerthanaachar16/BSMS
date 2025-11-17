<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
    // Fetch latest complaints
    $complaints = Complaint::orderBy('created_at', 'desc')->get();
     // Total complaints
    $totalComplaints = Complaint::count();

    // Resolved & Pending complaints
    $resolvedComplaints = Complaint::where('complaint_status', 'Resolved')->count();
    $pendingComplaints  = Complaint::where('complaint_status', '!=', 'Resolved')->count();

   
    $areaWiseComplaints = Complaint::select('ward')
        ->selectRaw('count(*) as total')
        ->groupBy('ward')
        ->get();



    // Only Zones and Wards (no divisions inside zones)
    $zones = [
        "Yelahanka" => ["1","2","3","4","5","6","7","8","27","28","29"],
        "Bangalore East" => ["66","67","68","74","75","76","94","95","96"],
        "Bangalore West" => ["110","111","112","136","137","138","139","140","141"],
        "Bangalore South" => ["168","169","170","172","173","174","197","198","199"],
        "Bommanahalli" => ["175","176","177","178","179","180","174","175","176"],
        "Rajarajeshwari Nagar" => ["27","28","29","160","161","162","157","158","159"],
        "Dasarahalli" => ["14","15","16","17","18","19","20","21","22"],
        "Mahadevapura" => ["81","82","83","84","85","86","87","88","89"],
    ];

    // Fetch complaints grouped by ward_id
    $wardCounts = \DB::table('complaints')
        ->select('ward', \DB::raw('count(*) as total'))
        ->groupBy('ward')
        ->pluck('total','ward');

    // Convert ward counts into zone counts
    $zoneWiseData = [];
    foreach ($zones as $zoneName => $wards) {
        $zoneTotal = 0;
        foreach ($wards as $wardId) {
            if (isset($wardCounts[$wardId])) {
                $zoneTotal += $wardCounts[$wardId];
            }
        }
        $zoneWiseData[$zoneName] = $zoneTotal;
    }


         

    return view('admin_dashboard', compact(
        'complaints',
        'totalComplaints',
        'resolvedComplaints',
        'pendingComplaints',
        'zoneWiseData'
    ));
    //   return view('admin_dashboard', compact('complaints'));
    }
}
                    