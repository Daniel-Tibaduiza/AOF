<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class envio_correos extends Mailable
{
    use Queueable, SerializesModels;

    public $distressCall;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    public function __construct(contactt $distressCall)
    {
        {
            $this->distressCall = $distressCall;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.enviodecorreos');
    }



    
}
