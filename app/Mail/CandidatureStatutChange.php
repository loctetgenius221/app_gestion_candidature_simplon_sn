<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\AppeleCandidature;

class CandidatureStatutChange extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;
    public $statut;

    /**
     * Create a new message instance.
     *
     * @param AppeleCandidature $candidature
     * @param string $statut
     */
    public function __construct(AppeleCandidature $candidature, $statut)
    {
        $this->candidature = $candidature;
        $this->statut = $statut;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mise à jour de votre candidature',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.candidature-statut-change',
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
