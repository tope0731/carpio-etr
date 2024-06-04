<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyApplicant;

class EmailController extends Controller
{
    //
    public function index(){
        $subject = 'Test Subject';
        $body = 'Test Message';

        Mail::to('user@gmail.com')->send(new NotifyApplicant($subject, $body));
    }
   
}
