<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeMailController extends Controller
{
    public function sentMail(Request $request)
    {
        // $sentEmail = "fast.shafikul.facebook@gmail.com";
        $subject = "Testing purpose Email Sent";
        $messageBody = "This is message body Test Email ";
        // $multipulMail = [
        //     'fast.shafikul.facebook@gmail.com',
        //     'kimayaaria@gmail.com',
        //     'aabhacharvi@gmail.com'
        // ];
        // foreach ($multipulMail as $values) {
        //    Mail::to($values)->send(new Welcome($sentEmail, $subject, $messageBody));

        // }
        $allMail = $request->allEmail;
        $separate = explode(' ', $allMail);
        for ($i=0; $i < count($separate); $i++) { 
            Mail::to($separate[$i])->send(new Welcome($subject, $messageBody));
        }
    }

    public function mailform()
    {
        return view('mail.mailform');
    }
}
