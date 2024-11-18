<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    /**
     * Create a new event instance.
     */
    public function __construct(array $message)
    {
        $this->message = $message;
    }

    /**
     * @return Channel
     */
    public function broadcastOn()
    {
        return new Channel('chat');
    }

    /**
     * @return string
     */
    public function broadcastAs()
    {
        return 'message.sent';
    }
}
