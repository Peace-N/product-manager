<?php

namespace App\Listeners;

use App\Events\HigherBidder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendBidEmail
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
     * @param  HigherBidder  $event
     * @return void
     */
    public function handle(HigherBidder $event)
    {
        $message = $event . ' just logged in to the application.';
        //Todo Send Email, Notified ..

    }
}
