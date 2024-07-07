<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeMailController extends Controller
{
    public function sentMail(Request $request)
    {
        // // $sentEmail = "fast.shafikul.facebook@gmail.com";
        // $subject = "Testing purpose Email Sent";
        // $messageBody = "This is message body Test Email ";
        // // $multipulMail = [
        // //     'fast.shafikul.facebook@gmail.com',
        // //     'kimayaaria@gmail.com',
        // //     'aabhacharvi@gmail.com'
        // // ];
        // // foreach ($multipulMail as $values) {
        // //    Mail::to($values)->send(new Welcome($sentEmail, $subject, $messageBody));

        // // }

        $request->validate([
            'allEmail' => 'required|string',
            'mailSubject' => 'required',
            'mailBody' => 'required',
        ]);
        $fileName = time() . "." . $request->file('attachment')->extension();
        $saveFile = $request->file('attachment')->move('upload', $fileName);
        if ($saveFile) {
            $allMail = $request->allEmail;
            $separate = explode(' ', $allMail);
            for ($i = 0; $i < count($separate); $i++) {
                Mail::to($separate[$i])->send(new Welcome($request->all(), $saveFile));
                echo "Mail sent -> " . $separate[$i];
            }
        } else {
            echo "file save faild";
        }
    }

    public function mailform()
    {
        return view('mail.mailform');
    }
}
