<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    //Definimos una propiedad pública que será el asunto del mensaje
    public $subject = "Información de contacto";

    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this-> contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

     //Método que mostrará la vista que contendrá el correo electrónico
    public function build()
    {
        return $this->view('emails.contactanos');
    }
}
