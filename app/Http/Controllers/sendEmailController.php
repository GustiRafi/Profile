<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendEmailController extends Controller
{
    public function send(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email'],
            'body' => ['required']
        ]);


        Mail::send('email-template', array(
            'name' => $validate['name'],
            'email' => $validate['email'],
            'body' => $validate['body'],
        ), function($message) use ($req){
            $message->from($req->email);
            $message->to('gustirafi49@gmail.com', 'Rafi Gusti')->subject('contact web profile');
        });

        return redirect()->back()->with('success','Thanks for contact me,i will read your message soon');
    }
}