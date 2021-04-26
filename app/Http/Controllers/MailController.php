<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewsLetter;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $request->validate([
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

        $ContactData = [
            'name' => htmlspecialchars($request->name),
            'phone' => htmlspecialchars($request->phone),
            'email' => htmlspecialchars($request->email),
            'subject' => htmlspecialchars($request->subject),
            'message' => htmlspecialchars($request->message),
        ];

        $user = $ContactData['name'];
        $message_sent = "Thank you for contacting us. We will get back to you promptly.";
        $title = "Thank You";
        $to = "contact@superoagrobase.com";

        Mail::to($to)->send(new SendMail($ContactData));
        return view('/thank', compact('title', 'user', 'message_sent'));
    }

    public function newsLetter(Request $request)
    {
        $title = "Thank You";
        $message_sent = "Thank you for subscribing to our newsletter";
        $newsLetter = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $newsLetterSubs = [
            'name' => htmlspecialchars($request->name),
            'email' => htmlspecialchars($request->email),
        ];

        $user = $newsLetterSubs['name'];
        $user_email = $newsLetter['email'];

        $to = "inventorymanager@superoagrobase.com";

        foreach ([$user_email, $to] as $rt) {
            Mail::to($rt)->send(new NewsLetter($newsLetterSubs));
        };

        return view('/thank', compact('title', 'user', 'message_sent'));
    }
}
