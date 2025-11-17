<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Ward;
use App\Models\Officials;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewComplaintAssigned;
use App\Mail\DeadlineReminderMail;

class ComplaintController extends Controller
{
    


public function store(Request $request)
{
    $wards = Ward::all();

    if ($request->isMethod('post')) {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'ward' => 'required|exists:wards,ward_no',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'remarks' => 'nullable|string'
        ]);

        // Save image
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('complaint_images'), $imageName);
        }

        // Create complaint
        $complaint = Complaint::create([
            'user_id'   => Auth::id(),
            'latitude'  => $request->latitude,
            'longitude' => $request->longitude,
            'ward'      => $request->ward,
            'remarks'   => $request->remarks,
            'image'     => $imageName,
        ]);

        // Get Complaint ID
        $complaintId = $complaint->id;

        // Send Email to user
        $user = Auth::user();
        if ($user && $user->email) {
            Mail::raw("Your complaint has been registered successfully.\nComplaint ID: {$complaintId}", function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Complaint Registered - Reference ID');
            });
        }

        // Return success message with complaint ID
        return redirect()->back()->with('success', "Complaint submitted successfully. Your Complaint ID is: {$complaintId}");
    }

    return view('add_complaints', compact('wards'));
}


 // Show complaints table
    public function index()
    {
        $complaints = Complaint::all();
        return view('admin_comlist', compact('complaints'));
    }

    public function adminList()
{
    $complaints = Complaint::all(); // Fetch all complaints
    return view('admin_comlist', compact('complaints'));
}

    // Update status via AJAX
    public function updateStatus(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->status = $request->status;
        $complaint->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }

  

    
    public function view($id)
    {
        $complaint = Complaint::findOrFail($id);
        return view('complaints.view', compact('complaint'));
    }


    public function checkStatus(Request $request)
{
    $complaint = null;

    if ($request->has('complaint_id')) {
        $complaint = Complaint::where('id', $request->complaint_id)->first();
    }

    return view('check_status', compact('complaint'));
}
    
// public function getOfficials($ward)
// {
//     $officials = Officials::where('ward', $ward)->get(['id','name']);
//     return response()->json($officials);
// }



// public function assignOfficials(Request $request)
// {
//     $request->validate([
//         'complaint_id' => 'required|exists:complaints,id',
//         'official_id'  => 'required|exists:officials,id',
//     ]);

//     $official = Officials::findOrFail($request->official_id);
//     $complaint = Complaint::findOrFail($request->complaint_id);

    
//     if ($complaint->complaint_status === 'In progress') {
//         return redirect()->back()->with('error', 'This complaint is already in progress.');
//     }
//     $official->complaints()->syncWithoutDetaching([$complaint->id]);

//     $complaint->complaint_status = 'In progress';
//     $complaint->save();

  
//     Mail::to($official->email)->send(new NewComplaintAssigned($complaint));

//     return redirect()->back()->with('success', 'Complaint assigned successfully and email sent.');
// }


// public function showComplaintList()
// {
//     $complaints = Complaint::all();  
//     return view('admin_comlist', compact('complaints')); 
// }


 // ✅ Fetch officials based on ward
    public function getOfficials($ward)
    {
        $officials = Officials::where('ward', $ward)->get(['id', 'name']);
        return response()->json($officials);
    }

    // ✅ Assign complaint to official
    public function assignOfficials(Request $request)
    {
        $request->validate([
            'complaint_id' => 'required|exists:complaints,id',
            'official_id'  => 'required|exists:officials,id',
        ]);

        $official = Officials::findOrFail($request->official_id);
        $complaint = Complaint::findOrFail($request->complaint_id);

        // Prevent assigning if already in progress
        if ($complaint->complaint_status === 'In progress') {
            return redirect()->back()->with('error', 'This complaint is already in progress.');
        }

        // Attach official to complaint
        $official->complaints()->syncWithoutDetaching([$complaint->id]);

        // Update complaint status & deadline tracking
        $complaint->complaint_status = 'In progress';
        $complaint->assigned_at = now();  // store assigned time
        $complaint->save();

        // Send email notification
        Mail::to($official->email)->send(new NewComplaintAssigned($complaint));

        return redirect()->back()->with('success', 'Complaint assigned successfully and email sent.');
    }

    // ✅ Complaint List
    public function showComplaintList()
    {
        $complaints = Complaint::all();  // Fetch complaints
        return view('admin_comlist', compact('complaints'));
    }

    // ✅ Fetch only available officials for reassign
    public function getAvailableOfficials1()
    {
        // Officials who are currently busy
        $busyOfficials = Complaint::where('complaint_status', 'In progress')
            ->pluck('official_id')
            ->toArray();

        // Officials who missed deadlines
        $deadlineMissedOfficials = Complaint::where('complaint_status', 'In progress')
            ->where('assigned_at', '<=', now()->subDay())
            ->pluck('official_id')
            ->toArray();

        // Merge excluded officials
        $excluded = array_unique(array_merge($busyOfficials, $deadlineMissedOfficials));

        // Fetch only available officials
        $officials = Officials::whereNotIn('id', $excluded)->get(['id', 'name']);

        return response()->json($officials);
    }

    

    /**
     * Get available officials via AJAX
     */
    public function getAvailableOfficials(Request $request)
    {
        $complaint = Complaint::findOrFail($request->complaint_id);

        if ($complaint->deadline_at && now()->lt($complaint->deadline_at)) {
            return response()->json(['error' => 'Deadline not yet passed.'], 403);
        }

        $busyOfficials = Complaint::where('complaint_status', 'In progress')
            ->where('deadline_at', '>', now())
            ->pluck('official_id')
            ->toArray();

        $officials = Officials::whereNotIn('id', $busyOfficials)->get(['id', 'name']);

        return response()->json($officials);
    }


   
 public function complaintList()
    {
        // Fetch complaints
        $openComplaints = DB::table('complaints')
            ->whereIn('complaint_status', ['pending', 'In progress'])
            ->orderBy('created_at', 'desc')
            ->get();

        $closedComplaints = DB::table('complaints')
            ->where('complaint_status', 'Resolved')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('complaint_list', compact('openComplaints', 'closedComplaints'));
    }


    public function show($id)
{
    // If you have Complaint model
    $complaint = Complaint::findOrFail($id);

    // If you don't have a model, use DB facade instead:
    // $complaint = DB::table('complaints')->where('id', $id)->first();

    return view('complaints_details1', compact('complaint'));
}

public function shows($id)
{
    $complaint = Complaint::findOrFail($id);

    return view('complaint_details', compact('complaint'));
}

public function viewcom($id)
{
    $complaint = Complaint::findOrFail($id);
    return view('view_complaints', compact('complaint'));
}


  // Fetch all free officials (not assigned to any complaint)
    public function getFreeOfficials()
    {
        // Get IDs of officials who are already assigned to any complaint
        $assignedOfficialIds = Complaint::whereNotNull('official_id')
                                        ->pluck('official_id')
                                        ->toArray();

        // Fetch officials who are NOT in the assigned list
        $officials = Officials::whereNotIn('id', $assignedOfficialIds)
                              ->get(['id', 'name']);

        return response()->json($officials);
    }

    // Reassign official to a complaint
    public function reassignOfficial(Request $request)
    {
        $request->validate([
            'complaint_id' => 'required|exists:complaints,id',
            'official_id' => 'required|exists:officials,id',
        ]);

        $complaint = Complaint::find($request->complaint_id);
        $complaint->official_id = $request->official_id;
        $complaint->save();

        return response()->json(['success' => 'Official reassigned successfully']);
    }

}

  