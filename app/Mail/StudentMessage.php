<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $student_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student_message)
    {
        $this->student_message = $student_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.studentsmessage')->subject("HYA Student");
    }
}
