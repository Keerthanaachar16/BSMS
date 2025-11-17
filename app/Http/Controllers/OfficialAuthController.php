<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officials;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Complaint;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;  

class OfficialAuthController extends Controller
{

     
      
    public function showLogin()
    {
        return view('officials_login');
    }

   
    public function login(Request $request)
    {
        
        $request->validate([
            'phone' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        
       


        $official = Officials::where('phone', $request->phone)->first();

        if (!$official || !Hash::check($request->password, $official->password)) {
            return back()->with('error', 'Invalid phone number or password.');
        }

        Auth::login($official);
        
        $todayComplaints = Complaint::whereDate('created_at', Carbon::today())->count();

       
        $totalComplaints = Complaint::count();

        return view('official_dashboard', compact('todayComplaints', 'totalComplaints'))->with('success', 'Login successful!');

       
    }

   
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('/')->with('success', 'Logged out successfully.');
    // }

    // Show login form
    // public function showLogin()
    // {
    //     return view('officials_login');
    // }

    
    // public function login(Request $request)
    // {
        
    //     $request->validate([
    //         'phone' => 'required|digits:10',
    //         'password' => 'required|min:6',
    //     ]);

      
    //     $official = Officials::where('phone', $request->phone)->first();

    //     if (!$official || !Hash::check($request->password, $official->password)) {
    //         return back()->with('error', 'Invalid phone number or password.');
    //     }

        
    //     Auth::login($official);

        
    //     $todayComplaints = Complaint::whereDate('created_at', Carbon::today())->count();

       
    //     $totalComplaints = Complaint::count();

       
    //     if ($official->assigned_complaint_id) {
    //         Session::flash('newComplaint', "You received a new complaint... ID: {$official->assigned_complaint_id}");
    //     }

    //     return view('official_dashboard', compact('todayComplaints', 'totalComplaints'))
    //         ->with('success', 'Login successful!');
    // }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }


     // Fetch newly assigned complaints for the logged-in official
    public function fetchAssignedComplaints()
    {
        $official = Auth::user();

        if (!$official) {
            return response()->json(['success' => false, 'message' => 'Not logged in']);
        }

        // If you only store one assigned_complaint_id
        if ($official->assigned_complaint_id) {
            $complaint = Complaint::find($official->assigned_complaint_id);

            return response()->json([
                'success' => true,
                'complaint' => $complaint ? [
                    'id' => $complaint->id,
                    'status' => $complaint->complaint_status,
                    'ward' => $complaint->ward,
                ] : null
            ]);
        }

        return response()->json(['success' => true, 'complaint' => null]);
    }

//    public function showComplaints()
// {
//     $officialId = auth()->id();
//     $official = \App\Models\Officials::with('complaints')->find($officialId);

//     if (!$official) {
//         return view('official_complaints', ['complaints' => []]);
//     }

//     // Explicitly select from complaints table to avoid ambiguity
//     $complaints = $official->complaints()
//         ->select('complaints.id', 'complaints.remarks')
//         ->get();

//     return view('official_complaints', compact('complaints'));
// }

public function myComplaints()
{
    $officialId = auth()->id(); // logged-in official
    $official = \App\Models\Officials::find($officialId);

    if (!$official) {
        return redirect()->back()->with('error', 'Official not found.');
    }

    // Fetch complaints through pivot (id + description come from complaints table)
    $complaints = $official->complaints()->where('complaints.complaint_status','!=','Resolved')->select('complaints.id', 'complaints.remarks','complaints.complaint_status')->get();

    return view('official_complaints', compact('complaints'));
}

public function showComplaint($id)
{
    $officialId = Auth::id();

    // Ensure the complaint belongs to this official (security check)
    $complaint = Complaint::join('complaint_official', 'complaints.id', '=', 'complaint_official.complaint_id')
        ->where('complaint_official.official_id', $officialId)
        ->where('complaints.id', $id)
        ->select('complaints.id', 'complaints.remarks', 'complaints.image', 'complaints.latitude', 'complaints.longitude')
        ->first();

    if (!$complaint) {
        return redirect()->back()->with('error', 'Complaint not found or not assigned to you.');
    }

    return view('official_complaints_view', compact('complaint'));
}


public function updateComplaint(Request $request, $id)
{
    $request->validate([
        
        'officials_remarks' => 'nullable|string',
        'updated_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'complaint_status' => 'required|string',
    ]);

    $complaint = Complaint::findOrFail($id);

    
    if ($request->hasFile('updated_image')) {
        $imageName = time().'_'.$request->updated_image->getClientOriginalName();
        $request->updated_image->move(public_path('complaint_images'), $imageName);
        $complaint->updated_image = 'complaint_images/'.$imageName;
    }
    

    $complaint->complaint_status = $request->complaint_status;
    $complaint->officials_remarks = $request->officials_remarks;
    $complaint->save();

    return back()->with('success', 'Complaint updated successfully!');
}


public function history()
{
    $officialId = auth()->id(); // logged-in official
    $official = \App\Models\Officials::find($officialId);

    if (!$official) {
        return redirect()->back()->with('error', 'Official not found.');
    }

    // Fetch only resolved complaints for this official
    $complaints = $official->complaints()
        ->where('complaints.complaint_status', 'Resolved')
        ->select('complaints.id', 'complaints.remarks', 'complaints.complaint_status')
        ->get();

    return view('history', compact('complaints'));
}


}                  