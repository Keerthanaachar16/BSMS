<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Officials;

class OfficialsProfileController extends Controller
{
    // Show profile page
    public function show()
    {
        // Fetch the logged-in official from the officials table
        $official = Officials::where('id', Auth::id())->first();

        return view('officials_profile', compact('official'));
    }

    // Show edit profile page
    public function edit()
    {
        $official = Officials::where('id', Auth::id())->first();

        return view('officials_profile_edit', compact('official'));
    }

    // Update profile
    public function update(Request $request)
    {
        $official = Officials::where('id', Auth::id())->first();

        // Validation
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:officials,email,' . $official->id,
            
        ]);

        // Update
        $official->name    = $request->name;
        $official->email   = $request->email;
       
        $official->save();

        return redirect()->route('officials_profile.show')
                         ->with('success', 'Profile updated successfully!');
    }
}