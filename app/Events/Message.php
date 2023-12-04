<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $message;
    public $sender_id;
    public $receiver_id;


    public function __construct($sender_id, $receiver_id, $username, $message)
    {
        $this->sender_id = $sender_id;
        $this->receiver_id = $receiver_id;
        $this->username = $username;
        $this->message = $message;
    }


    public function broadcastOn()
    {
        // Use the user IDs to create a unique private channel for this chat
        return new PrivateChannel('chat.' . $this->sender_id . '.' . $this->receiver_id);
    }

    public function broadcastAs()
    {
        return 'message';
    }
}