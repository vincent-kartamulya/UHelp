<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function sendMail() {
        $name = 'bob';

        Mail::to("fake@mail.com")->send(new SendEmail($name));
    }
}
