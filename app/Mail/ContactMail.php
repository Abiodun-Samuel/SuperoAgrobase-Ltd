<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $ContactData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ContactData)
    {
        $this->ContactData = $ContactData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactmail')->subject('Contact Message');
    }
}
