<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmailSender;

class ContactController extends Controller
{
    public function index(){
        return view("contact");
    }

    public function send_email(Request $request){
        $emailSender = new EmailSender();
        $email = $request->input('email');
        $fullname = $request->input('fullname');
        $message = $request->input('message');
        $subject = $request->input('subject');
        $emailSender->sendEmail(
            'restaurant@example.com', 
            'Restaurant', 
            $email, 
            $fullname, 
            $subject, 
            $message
        );
        $message = "Email sent successfully.";
        $type = "success";
        return view("contact")->with('message', $message)->with('type', $type);
    }
}
