<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     // Show profile
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Edit profile
    public function edit()
    {
        $user = Auth::user();
        return view('profile_edit', compact('user'));
    }

    // Update profile
    public function update(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|min:3',
            'email'   => 'required|email',
            'phone'   => 'required|digits:10',
            'address' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
