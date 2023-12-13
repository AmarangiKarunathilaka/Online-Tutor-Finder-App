<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class EmailController extends Controller
{
    public function sendEmailButton()
    {
        return view('send-email-button'); // Replace 'your-blade-view' with the actual name of your blade file
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'message' => $request->button == 'accept' ? 'You selected Accept' : 'You selected Remove'
        ];

        Mail::to('onlinetutorfinderapp@gmail.com')->send(new SendEmail($details));

        return redirect()->route('send.email.button')->with('message', 'Email sent successfully!');

    }
}
