<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


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
            'phone' => 'required|numeric|digits:11|integer',
            'email' => 'required|email:rfc,strict,filter',
            'subject' => 'required|string',
            'message' => 'required|string'
        ], [
            'phone.integer' => 'Enter a valid phone number',
        ]);

        $ContactData = [
            'name' => htmlspecialchars($request->name),
            'phone' => htmlspecialchars($request->phone),
            'email' => htmlspecialchars($request->email),
            'subject' => htmlspecialchars($request->subject),
            'message' => htmlspecialchars($request->message)
        ];

        $user = $ContactData['name'];

        $to = "contact@superoagrobase.com";
        $test = "abiodunsamyemi@gmail.com";

        Mail::to($to)->send(new SendMail($ContactData));
        return back()->with('message_sent', "$user, Thank you for contacting us. We will get back to you promptly.");
    }
    public function newsLetter(Request $request)
    {
        $newsLetter  = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);
        return 'news';
    }
}
