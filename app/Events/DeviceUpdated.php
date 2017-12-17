<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DeviceUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The Device that has changed
     *
     * @var null
     */
    public $device = null;

    /**
     * The New Device State
     *
     * @var null
     */
    public $newDeviceState = null;

    /**
     * The old Device State
     *
     * @var null
     */
    public $oldDeviceState = null;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($device)
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
