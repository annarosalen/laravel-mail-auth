<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $Msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this -> Msg = $test;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('no-replay@laravel.com')
            ->view('mail.testmail');
    }
}
