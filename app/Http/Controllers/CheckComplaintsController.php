<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class CheckComplaintsController extends Controller
{
    public function checkComplaints(Request $request)
{
    $complaint = null;

    if ($request->has('complaint_id')) {
        $complaint = Complaint::where('id', $request->complaint_id)->first();
    }

    return view('check_complaints', compact('complaint'));
}

}
