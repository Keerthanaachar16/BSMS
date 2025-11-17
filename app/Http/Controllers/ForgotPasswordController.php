<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function showForgotForm()
    {
        return view('forgot-password'); // Your forgot password blade file
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email does not exist.');
        }

        $otp = rand(100000, 999999);  // Generate 6-digit OTP

        // Store OTP and email temporarily in session
        session([
            'otp' => $otp,
            'email_for_reset' => $user->email
        ]);

        // Send OTP Email
        Mail::send('emails.send_otp', ['otp' => $otp], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Your OTP for Password Reset');
        });

        return view('otp', ['email' => $user->email]);  // Show OTP verification page
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        if ($request->otp != session('otp')) {
            return back()->with('error', 'Invalid OTP.');
        }

        return view('reset', ['email' => session('email_for_reset')]);  // Show reset password form
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        $email = session('email_for_reset');

        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // Clear session data after success
        session()->forget(['otp', 'email_for_reset']);

        return redirect('/login')->with('success', 'Password reset successfully.');
    }
}