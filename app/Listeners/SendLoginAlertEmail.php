<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Mail\LoginAlertEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLoginAlertEmail
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
    public function handle(UserLoggedIn $event): void
    {
        Mail::to($event->user->email)->send(new LoginAlertEmail($event->user));
    }
}
