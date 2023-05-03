<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;


class EmailController extends Controller
{
    

    public function verify(EmailVerificationRequest $request)
    {

        $request->fulfill();
        return to_route('dashboard.index');

    }

    public function resend(Request $request)
    {

        $request->user()->sendEmailVerificationNotification();
        return back()->with('success', 'L\'émail de confirmation a été envoyé avec succès');
    
    }

}
