<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail1 extends Mailable
{
    use Queueable, SerializesModels;

    public $user1;

    public function __construct(array $user1)
    {
        $this->user1 = $user1;
    }

    public function build()
    {
        return $this->view('welcomeEmail1');
    }
}
