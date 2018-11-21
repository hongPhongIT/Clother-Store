<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\sendMail;
use Illuminate\Support\Facades\DB;
use Session;
use Mail;


class ContactController extends Controller {

    public function index() {
        return view('layouts.contact');
    }

    public function sendMail(Request $request) {
        try {
//            $this->validate($request,[
//                'name' => 'required',
//                'email' => 'required|email|max: 255',
//                'subject' => 'required|max: 255',
//                'message' => 'required',
//            ]);
//            dd($request->all());
            $data = [
                'name' => $request->Name,
                'email' => $request->Email,
                'subject' => $request->Subject,
                'bodyMessage' => $request->Message,
            ];
//            Mail::send('layouts.mail', function($message) use ($data) {
//                $message->from('laravel.clothes@gmail.com','Customer Feedback');
//                $message->to('laravel.clothes@gmail.com');
//                $message->subject($data['subject']);
//                session::flash('success',"Email sent success");
//            });
            
            Mail::to($data['email'])->send(new sendMail($data));
//            Session::flash('message', " Your message sent successfully, thank you for your feedback ");
            return redirect()->back()->with('message', 'Your message sent successfully, thank you for your feedback ');
        }
        catch (\Exception $e) {
            dd($e);
        }
    }

}

//$data['email


    