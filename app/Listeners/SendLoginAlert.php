<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\LoginAlertEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Login;

class SendLoginAlert
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Mail::to($event->user->email)->send(new LoginAlertEmail());
    }
}
