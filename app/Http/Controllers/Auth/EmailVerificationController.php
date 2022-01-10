<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function verifyEmail()
    {
        return 'TODO';
        return view('dashboard.verify-email');
    }

    public function verificationHandler(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('dashboard')->with('notification', 'Email has been verified!');
    }

    public function resendEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('notification', 'Verification link sent!');
    }
}
