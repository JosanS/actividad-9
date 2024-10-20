<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserRegistered;
use App\Events\UserLoggedIn;
use App\Listeners\SendWelcomeEmail;
use App\Listeners\SendLoginAlertEmail;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Event::listen(
            UserRegistered::class,
            SendWelcomeEmail::class
        );

        Event::listen(
            UserLoggedIn::class,
            SendLoginAlertEmail::class
        );
    }
}
