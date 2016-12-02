<?php

namespace Cooltime\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use Cooltime\Models\ServerInfo;

class Test
{
    use InteractsWithSockets, SerializesModels;

    public $server;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ServerInfo $server)
    {
        //
        $this->server = $server;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
