<?php

namespace Cooltime\Listeners;

use Cooltime\Events\Test;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class TestListener implements ShouldQueue
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
     * @param  Test  $event
     * @return void
     */
    public function handle(Test $event)
    {
        //
        Log::info($event->server);
    }
}
