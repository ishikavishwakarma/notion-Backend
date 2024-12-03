<?php

namespace App\Http\Controllers\MailController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Mail\UserAcknowledgementEmail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function contactMail(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|numeric|digits_between:10,13',
            'subject' => 'required|string',
            'details' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 422);
        }

        $email = $req->email;
        $details = $req->details;
        $name = $req->name;
        $mobile = $req->mobile;
        $subject = $req->subject; 
        // $predefinedEmail = 'noreply@notioninsurance.com';
        // $predefinedEmail = 'hr@notioninsurance.com';
        $predefinedEmail = 'contact@notioninsurance.com';



        // Send email to the predefined admin email
        Mail::to($predefinedEmail)->send(new WelcomeEmail($details, $name, $email, $mobile, $subject));

        // Send acknowledgement email to the user
        Mail::to($email)->send(new UserAcknowledgementEmail($name));

        return response()->json(['message' => 'Email Sent Successfully'], 200);
    }
}
