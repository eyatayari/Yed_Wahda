<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'subject'=> 'required',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'email'    => $request->email,
            'subject'      =>  $request->subject,
            'message'   =>   $request->message
        );
        //TODO ajouter mail destinataire
        Mail::to('')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
