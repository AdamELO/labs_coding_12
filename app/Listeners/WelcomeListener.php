<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to( $event->user->email )->send( new Welcome( $event->user ) );
    }
}
