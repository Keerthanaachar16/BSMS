<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class OfficialsForgotPasswordController extends Controller
{
    // Show Forgot Password form
    public function showForgotForm()
    {
        return view('officials_forgot_password');
    }

    // Send OTP
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $email = $request->email;
        $otp = rand(100000, 999999);

        session([
            'officials_reset_otp' => $otp,
            'officials_reset_email' => $email,
        ]);

        // Send OTP email (ensure mail is configured in .env)
        Mail::send('emails.officials_otp_email', ['otp' => $otp], function ($message) use ($email) {
            $message->to($email);
            $message->subject('OTP for Password Reset');
        });

        return redirect()->route('officials.otp')->with('success', 'OTP sent successfully to your email.');
    }

    // Show OTP form
    public function showOtpForm()
    {
        return view('officials_otp');
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $sessionOtp = session('officials_reset_otp');
        $email = session('officials_reset_email');

        if (!$sessionOtp || !$email) {
            return redirect()->route('officials.forgot')->with('error', 'Session expired. Please try again.');
        }

        if ($request->otp == $sessionOtp) {
            return redirect()->route('officials.reset')->with('success', 'OTP verified successfully.');
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }

    // Show Reset Password form
    public function showResetForm()
    {
        return view('officials_reset');
    }

    // Reset Password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $email = session('officials_reset_email');

        if (!$email) {
            return redirect()->route('officials.forgot')->with('error', 'Session expired. Please try again.');
        }

        User::where('email', $email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Clear session
        session()->forget(['officials_reset_otp', 'officials_reset_email']);

        return redirect()->route('officials.login')->with('success', 'Password reset successful. Please login.');
    }
}