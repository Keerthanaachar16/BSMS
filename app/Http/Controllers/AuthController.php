<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10',
            'password' => 'required',
        ]);

        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'phone' => 'Invalid phone or password.',
        ]);
    }

    // Show register form
    public function showRegisterForm()
    {
        return view('register');
    }

    // Show forgot password form
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }
}