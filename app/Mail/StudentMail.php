<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $recipientEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $recipientEmail)
    {
        //
        $this->name = $name;
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->to($this->recipientEmail, $this->name)
        ->subject('laravel mail tutorial')
        ->view('mail')
        ->with(['data' => $this->name]);  
    }
}
