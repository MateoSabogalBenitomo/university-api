<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ParticipacionAlertMail extends Mailable
{
    use Queueable, SerializesModels;

    private $cliente;
    private $datos;
    private $licitacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre_cliente,$datos,$licitacion)
    {
        $this->cliente = $nombre_cliente;
        $this->datos   = $datos;
        $this->licitacion = $licitacion;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this
        ->subject(__("Señor(a) :cliente", ['cliente' => $this->cliente ]))
        ->markdown('email.licitacion')
        ->with('documentos', $this->datos)
        ->with('licitacion', $this->licitacion)
        ->with('cliente', $this->cliente);
    }
}
