<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Complaint;

class AuthController extends Controller
{
    // Register user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'phone' => 'required|digits:10|unique:users,phone',
            'email' => 'nullable|email|unique:users,email',
            'address' => 'nullable|string|max:255',
            'password' => 'required|confirmed|min:8|max:15',
        ],[
            'phone.unique'=>'This phone number is already registered.'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    //  Login user
    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10',
            'password' => 'required',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Invalid phone number or password.');
        }

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Login successful!');
    }

    // public function app_users()
    // {
        
    //     $users = User::all();
    //     $totalUsers=User::count();
    //     return view('app_users', compact('users','totalUsers'));
    // }

  public function app_users()
{
    // Fetch all users
    $users = User::all();

    foreach ($users as $user) {
        // Count of irrelevant complaints for this user
        $irrelevantCount = Complaint::where('user_id', $user->id)
                            ->where('complaint_status', 'irrelevant')
                            ->count();

        // Store the count in is_blocked column
        $user->is_blocked = $irrelevantCount;

        $user->save();
    }

    $totalUsers = $users->count();

    return view('app_users', compact('users', 'totalUsers'));
}
    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }
}     