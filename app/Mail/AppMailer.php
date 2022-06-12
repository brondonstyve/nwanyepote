<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject;
    public $template;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $template, string $subject, array $data)
    {
        //
        $this->data = $data;
        $this->subject = $subject;
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), 'NWANYE POTE')
            ->view($this->template, $this->data)
            ->subject($this->subject);
    }
}
