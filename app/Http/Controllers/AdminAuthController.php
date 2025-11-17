<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Fixed admin email
    private $adminEmail = "system292916@gmail.com"; 

    public function showLogin()
    {
        return view('admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $this->adminEmail)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('is_admin_logged_in', true);
            return redirect('/admin_dashboard');
        }

        return back()->withErrors(['Invalid email or password']);
    }

    public function showForgot()
    {
        return view('admin_forgot_password');
    }

    public function sendOtp()
    {
        $otp = rand(100000, 999999);
        Session::put('otp', $otp);

        Mail::raw("Your OTP is: $otp", function ($message) {
            $message->to($this->adminEmail)
                    ->subject('Admin Password Reset OTP');
        });

        return redirect()->route('admin.otp')->with('success', 'OTP sent to your email.');
    }

    public function showOtp()
    {
        return view('admin_otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        if ($request->otp == Session::get('otp')) {
            return redirect()->route('admin.reset');
        }

        return back()->withErrors(['Invalid OTP']);
    }

    public function showReset()
    {
        return view('admin_reset');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = Admin::where('email', $this->adminEmail)->first();

        if ($admin) {
            $admin->update([
                'password' => Hash::make($request->password)
            ]);
        }

        Session::forget('otp');

        return redirect()->route('admin.login')->with('success', 'Password reset successfully! Please login.');
    }
}