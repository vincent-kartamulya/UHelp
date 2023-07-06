<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessEmail;
use App\Models\Event;
use App\Mail\SendEmail;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        $uuid = $request->id;
        $event = Event::where('uuid', $uuid)->firstOrFail();
        $certificates = Certificate::where('event_id', $event->id)->get();
        $eventName = $event->title;
        $eventDate = $event->date;
        foreach($certificates as $certificate){
            $name = $certificate->recipient->name;
            $certificateUrl = $certificate->path;
            $email = $certificate->recipient->email;
            ProcessEmail::dispatch($email, $name, $eventName, $eventDate, $certificateUrl);
        }
        return redirect()->back()->with('success', 'Email Sent!');
    }
}
