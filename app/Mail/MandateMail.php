<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MandateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mandate;
    public $pdfPath;

    public function __construct($mandate, $pdfPath)
    {
        $this->mandate = $mandate;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('Mandate Letter')
                    ->view('emails.mandate')
                    ->attach($this->pdfPath, [
                        'as' => 'Mandate_Letter.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
