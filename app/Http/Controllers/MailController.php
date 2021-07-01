<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;
use Session;

class MailController extends Controller
{
    public function contact()
    {
        $title = "Contact Us";
        return view("contact_us", compact("title"));
    }

    public function contactMail(Request $request)
    {
        $ContactData = $request->validate([
            'name' => 'required|string|max:20|min:3',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required|email:rfc,strict,filter',
            'subject' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => function ($attribute, $value, $fail) {
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIp = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIp";
                $response = \file_get_contents($url);
                $response = json_decode($response);

                if (!$response->success) {
                    Session::flash('Please check reCaptcha');
                    $fail('Google Recaptcha Failed, Please Check the reCaptcha');
                }
            },
        ], [
            'phone.integer' => 'Enter a valid phone number',
        ]);

        $user = $ContactData['name'];
        $message_sent = "Thank you for contacting us. We will get back to you promptly.";
        $title = "Thank You";
        Mail::to('contact@superoagrobase.com')->send(new ContactMail($ContactData));
        return view('thank', compact('title', 'user', 'message_sent'));
    }

    public function newsLetter(Request $request)
    {
        $title = "Thank You";
        $message_sent = "Thank you for subscribing to our newsletter";
        $newsLetter = $request->validate([
            'email' => 'required|email:filter',
        ]);

        Newsletter::subscribe($newsLetter['email']);

        return redirect()->route('home')->with('success', 'You have successfully subscribed to our mailing list.');
    }
}
