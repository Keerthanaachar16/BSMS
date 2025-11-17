<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officials;
use Illuminate\Support\Facades\Validator;
use App\Mail\OfficialCredentialsMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Complaint;


class OfficialsController extends Controller
{

    public function index()
    {
        $officials = Officials::all(); // fetch all records
        $totalOfficials=Officials::count();
        return view('officials', compact('officials','totalOfficials'));
    }
    //  public function app_officials()
    // {
       
    //     $officials = Officials::all();
    //     $totalOfficials=Officials::count();
    //     return view('app_officials', compact('officials','totalOfficials'));
    // }


    public function app_officials()
{
    // Fetch all officials with complaint counts
    $officials = Officials::withCount([
        'complaints as pending_count' => fn($q) => $q->where('complaint_status', 'Pending'),
        'complaints as inprogress_count' => fn($q) => $q->where('complaint_status', 'In progress'),
        'complaints as resolved_count' => fn($q) => $q->where('complaint_status', 'Resolved'),
    ])->get();

    $totalOfficials = Officials::count();

    return view('app_officials', compact('officials','totalOfficials'));
}

public function getComplaints($officialId, $status)
{
    $complaints = Complaint::where('official_id', $officialId)
        ->where('complaint_status', $status)
        ->get();

    return response()->json($complaints);
}

public function downloadComplaintsPdf($officialId, $status)
{
    $official = Officials::findOrFail($officialId);

    $complaints = Complaint::where('official_id', $officialId)
        ->where('complaint_status', $status)
        ->get();

    $pdf = Pdf::loadView('exports.complaints_pdf', compact('complaints', 'status', 'official'));
    return $pdf->download("{$status}complaints_official{$officialId}.pdf");
}

     // Hardcoded Zones → Divisions → Wards
    // private $zones = [
    //     "Yelahanka Zone" => [
    //         "Yelahanka" => ["1", "2","3","4","5"],
    //         "Byatarayanapura" => ["6", "7","8","9"],
            
    //     ],
    //     "East Zone" => [
    //         "Hebbal" => ["66", "67","68","69","70", "71","72","73"],
    //         "Pulakesi Nagar" => ["74","75","76","77","78","79","80"],
    //         "Sarvagnanagar" => ["94","95","96","97","98","99","100","101"],
    //         "C.V.Raman Nagar" => ["117","118","119","120","121","122","123","124","125"],
    //         "Shivajinagar" => ["126","127","128","129","130","131"],
    //         "Shantinagar" => ["178","179","180","181","182","183","184"],
    //     ],
    //     "West Zone" => [
    //         "Gandhinagar" => ["132", "133","134"],
    //         "Chamarajpet" => ["165", "166","167"],
    //         "Rajajinagar" => ["139", "140","141"],
    //     ],
    //     "South Zone" => [
    //         "Basavanagudi" => ["210", "211","212","213", "214","215"],
    //         "Jayanagar" => ["194", "195","196"],
    //         "Padmanabhanagar" => ["200", "201","202"],
    //     ],
    //     "Bommanahalli Zone" => [
    //         "Bommanahalli" => ["217", "218","219", "220","221", "222","223", "224","225", "226","227", "228","229", "230","231", "232",],
          
    //     ],
    //     "Rajarajeshwari Nagar Zone" => [
    //         "Yeshwanthapura" => ["28", "29","30"],
    //         "Rajarajeshwari Nagar" => ["36", "37","38"],
            
    //     ],
    //     "Dasarahalli Zone" => [
    //         "Dasarahalli" => ["16", "17","18", "19","20", "21","22", "23","24", "25","26", "27",],
            
    //     ],
       
    //     "Mahadevapura Zone" => [
    //         "KR Puram" => ["81", "82","83", "84","85"],
    //         "Mahadevapura" => ["104", "105","106"],
    //     ],
    // ];


    private $zones = [
    "Yelahanka" => [
        "Yelahanka" => [
            "1" ,
            "2",
            "3",
        ],
        "Byatarayanapura" => [
            "6",
            "7",
            "8",
        ],
        "Yeshwanthapura" => [
            "27",
            "28" ,
            "29",
        ],
    ],

    "Bangalore East" => [
        "Hebbal" => [
            "66",
            "67",
            "68",
        ],
        "Pulakesi Nagar" => [
            "74",
            "75",
            "76",
        ],
        "Sarvagnanagar" => [
            "94",
            "95",
            "96",
        ],
    ],

    " Bangalore West" => [
        "Gandhinagar" => [
            "110" ,
            "111",
            "112",
        ],
        "Chamarajpet" => [
            "136",
            "137",
            "138",
        ],
        "Rajajinagar" => [
            "139",
            "140",
            "141",
        ],
    ],

    " Bangalore South" => [
        "Basavanagudi" => [
            "168",
            "169",
            "170",
        ],
        "Jayanagar" => [
            "172",
            "173",
            "174",
        ],
        "Padmanabhanagar" => [
            "197",
            "198",
            "199",
        ],
    ],

    "Bommanahalli" => [
        "Bommanahalli" => [
            "175",
            "176",
            "177",
        ],
        "BTM Layout" => [
            "178",
            "179",
            "180",
        ],
        "HSR Layout" => [
            "174",
            "175",
            "176",
        ],
    ],

    "Rajarajeshwari Nagar" => [
        "Rajarajeshwari Nagar" => [
            "160",
            "161",
            "162",
        ],
        "Kengeri" => [
            "159",
            "158",
            "157",
        ],
        "Yeshwanthapura" => [
            "27",
            "28",
            "29",
        ],
    ],

    "Dasarahalli" => [
        "Dasarahalli" => [
            "14",
            "15",
            "16",
        ],
        "Peenya" => [
            "17",
            "18",
            "19",
        ],
        "Jalahalli" => [
            "20",
            "21",
            "22",
        ],
    ],

    "Mahadevapura" => [
        "KR Puram" => [
            "81",
            "82",
            "83",
        ],
        "Mahadevapura" => [
            "84",
            "85",
            "86",
        ],
        "Whitefield" => [
            "87",
            "88",
            "89",
        ],
    ],
];




    public function create()
    {
        $zones = array_keys($this->zones);
        return view('add_user', compact('zones'));
    }

    public function getDivisions(Request $request)
    {
        $zone = $request->zone;
        $divisions = isset($this->zones[$zone]) ? array_keys($this->zones[$zone]) : [];
        return response()->json($divisions);
    }

    public function getWards(Request $request)
    {
        $zone = $request->zone;
        $division = $request->division;
        $wards = isset($this->zones[$zone][$division]) ? $this->zones[$zone][$division] : [];
        return response()->json($wards);
    }

//     public function store(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name'      => 'required|string|max:100',
//             'phone'     => 'required|digits:10|unique:officials,phone',
//             'email'     => 'required|email|unique:officials,email',
//             'zone'      => 'required',
//             'division'  => 'required',
//             'ward'      => 'required',
//             'password' => 'required|confirmed|min:8|max:15'
//         ]);

     

//         Officials::create([
//             'name'     => $request->name,
//             'phone'    => $request->phone,
//             'email'    => $request->email,
//             'zone'     => $request->zone,
//             'division' => $request->division,
//             'ward'     => $request->ward,
//             'password' => bcrypt($request->password),
//         ]);

         
//     Mail::to($official->email)->send(
//         new OfficialCredentialsMail(
//             $official->name,
//             $official->email,
//             $official->phone,
//             $request->password 
//         )
//     );

//     return redirect()->back()->with('success', 'Added Successfully & Credentials Sent to Email!');
// }
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name'      => 'required|string|max:100',
        'phone'     => 'required|digits:10|unique:officials,phone',
        'email'     => 'required|email|unique:officials,email',
        'zone'      => 'required',
        'division'  => 'required',
        'ward'      => 'required',
        'password'  => 'required|confirmed|min:8|max:15'
    ]);

    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput()
    //         ->with('error', 'Validation failed! Please correct the errors.');
    // }

    // ✅ Create the official and save instance in variable
    $official = Officials::create([
        'name'     => $request->name,
        'phone'    => $request->phone,
        'email'    => $request->email,
        'zone'     => $request->zone,
        'division' => $request->division,
        'ward'     => $request->ward,
        'password' => bcrypt($request->password),
    ]);

    // ✅ Now $official is defined, send email
    Mail::to($official->email)->send(
        new OfficialCredentialsMail(
            $official->name,
            $official->email,
            $official->phone,
            $request->password  // raw password
        )
    );

    return redirect()->back()->with('success', 'Added Successfully & Credentials Sent to Email!');
}


    public function show($id)
    {
        $official = Officials::findOrFail($id);
        return view('view_user', compact('official'));
    }

    public function edit($id)
{
    $official = Officials::findOrFail($id);
    return view('edit_user', compact('official'));
}

public function update(Request $request, $id)
{
    $official = Officials::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'zname' => 'nullable|string|max:255',
        'div' => 'nullable|string|max:255',
        'ward' => 'nullable|string|max:255',
    ]);

    $official->update($request->all());

    return redirect()->route('officials.index')->with('success', 'User updated successfully!');
}

public function destroy($id)
{
    $official = Officials::findOrFail($id);
    $official->delete();

    return redirect()->back()->with('success', 'Official deleted successfully!');
}
}
