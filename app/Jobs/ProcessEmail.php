<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public string $email;
    public string $name;
    public string $eventName;
    public DateTime $eventDate;
    public string $certificateUrl;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $email, string $name, string $eventName, DateTime $eventDate, string $certificateUrl)
    {
        $this->email = $email;
        $this->name = $name;
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->certificateUrl = $certificateUrl;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new SendEmail($this->name, $this->eventName, $this->eventDate, $this->certificateUrl));

    }
}
