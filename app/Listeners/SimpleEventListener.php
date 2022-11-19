<?php

namespace App\Listeners;

use App\Events\PrivateChannelEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SimpleEventListener
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
     * @param  \App\Events\PrivateChannelEvent  $event
     * @return void
     */
    public function handle(PrivateChannelEvent $event)
    {
        Log::info('Event.SimpleEventListener: ' . 'Called!');
        Log::info('Event.ClientStreamStarted.Listener: ' . $event->message);
    }
}
