<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail as MailFacade;

class MailController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }

    public function send(Request $request)
{
    $request->validate([
        'email' => 'required|email', 
        'title' => 'required|string',
        'body' => 'required|string', 
    ]);

    try {
        $details = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        $recipient = $request->email;

        MailFacade::to($recipient)->send(new Mail($details));

        return back()->with('success', 'Email sent successfully.');
        
    } catch (\Exception $e) {
        Log::error('Email sending failed: ' . $e->getMessage());
        return back()->with('error', 'Failed to send email. Please try again later.');
    }
}
}
