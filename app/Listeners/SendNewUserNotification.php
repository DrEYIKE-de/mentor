<?php

namespace App\Listeners;

use App\Events\UserNotification;
use App\Mail\NewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserNotification  $event
     * @return void
     */
    public function handle(UserNotification $event)
    {
       Mail::to($event->user->email)->send(new NewUserMail($event->user));
    }
}
