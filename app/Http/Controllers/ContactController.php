<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmailSender;

/**
 * Contact controller.
 */
class ContactController extends Controller
{
    /**
     * Display the contact form.
     */
    public function index(){
        return view("contact");
    }

    /**
     * In the `send_email()` method, an instance of the `EmailSender` class is created. 
     * The input values from the request are extracted, including the email, fullname, message, and subject. 
     * The `sendEmail()` method of the `EmailSender` instance is called with the appropriate parameters 
     * to send the email. If the email is sent successfully, a success message is set and the contact 
     * form view is returned with the message and type variables.
     */
    public function send_email(Request $request){
        $emailSender = new EmailSender();
        $email = $request->input('email');
        $fullname = $request->input('fullname');
        $message = $request->input('message');
        $subject = $request->input('subject');
        $emailSender->sendEmail(
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
