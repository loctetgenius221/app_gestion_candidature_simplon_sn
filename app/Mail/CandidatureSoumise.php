<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\AppeleCandidature;

class CandidatureSoumise extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    /**
     * Create a new message instance.
     *
     * @param AppeleCandidature $candidature
     */
    public function __construct(AppeleCandidature $candidature)
    {
        $this->candidature = $candidature;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de soumission de candidature',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.candidature-soumise',
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
