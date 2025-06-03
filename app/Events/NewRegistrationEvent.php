<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\Channel;

class NewRegistrationEvent implements ShouldBroadcast
{
    use SerializesModels;

    public $fullName;

    public function __construct($fullName)
    {
        $this->fullName = $fullName;
    }

    public function broadcastOn()
    {
        return new Channel('registration-channel');
    }

    public function broadcastAs()
    {
        return 'new-registration';
    }
}