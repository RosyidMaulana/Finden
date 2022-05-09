<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {

        return view('home.index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'name' => $request->name,
          'subject' => $request->subject,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('email-kirim', $data, function($message) use ($data) {
          $message->to('kozumekenma257@gmail.com')
          ->subject($data['subject']);
        });

        return redirect('../#contact')->with(['message' => 'Email successfully sent!']);
    }
}
