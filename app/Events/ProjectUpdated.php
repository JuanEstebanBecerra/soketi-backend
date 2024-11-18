<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProjectUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var int
     */
    private int $projectId;

    /**
     * @var array
     */
    public array $content;

    /**
     * Create a new event instance.
     */
    public function __construct(int $projectId, array $content)
    {
        $this->projectId = $projectId;
        $this->content = $content;
    }

    /**
     * @return PrivateChannel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('project-' . $this->projectId);
    }

    /**
     * @return string
     */
    public function broadcastAs()
    {
        return 'project.updated';
    }
}
