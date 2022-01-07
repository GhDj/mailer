<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRDVMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var String
     */
    private $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $text)
    {
        //
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rdv@biim-com.com', 'BIIM COM')
            ->cc(['rdv@biim-com.com'])
            ->subject('CONFIRMATION RDV BIIM COM')
            ->markdown('mails.rdv')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => '/inboxes/',
                'text' => $this->text
            ]);
    }
}
