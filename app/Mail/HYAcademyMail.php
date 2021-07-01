<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HYAcademyMail extends Mailable 
{
    use Queueable, SerializesModels;
    public $hyacademy;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($hyacademy)
    {
        $this->hyacademy = $hyacademy;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.hyacademy')->subject("HarvestYield Academy");
    }
}
