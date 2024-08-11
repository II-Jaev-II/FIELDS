<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Helpers\MailHelper;

class ERequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $remarks;
    public $referenceNumber;
    protected $account; // New property to hold the email account

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $remarks, $referenceNumber, $account)
    {
        $this->subject = $subject;
        $this->remarks = $remarks;
        $this->referenceNumber = $referenceNumber;
        $this->account = $account; // Store the email account

        // Set the mail configuration dynamically based on the account
        MailHelper::setMailConfig($this->account);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope();
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'apco/email-contents',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
