<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    // public $mails;
    public $allContent;
    public $fileName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($allContent, $fileName)
    {
        // $this->mails = $emails;
        $this->allContent = $allContent;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            // subject: 'Welcome',
            subject: $this->allContent['mailSubject'],
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.sentTestMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        $attachment = [];
        if($this->fileName){
            $attachment = [
                Attachment::fromPath(public_path('/' . $this->fileName))
            ];
        }
        return $attachment;
    }
}
