<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $quoteDetails;
     public $mainDetails;
     public $additionalDetails;
     public $quote;
    public function __construct($quoteDetails, $mainDetails, $additionalDetails, $quote)
    {
        if (isset($quoteDetails['Drawing_Requirements']) && is_array($quoteDetails['Drawing_Requirements'])) {
            $quoteDetails['Drawing_Requirements'] = json_encode($quoteDetails['Drawing_Requirements']);
        }
        $this->quoteDetails = $quoteDetails;
        $this->mainDetails = $mainDetails;
        $this->additionalDetails = $additionalDetails;
        $this->quote = $quote;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: $this->quoteDetails['Email'],
            subject: 'Lassana Gedara Quote for ' . $this->quoteDetails['Service'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $service = $this->mainDetails['Service'] ?? null;
        if ($service === 'Domestic House') {
            $view = 'emails.domestic_house_quote';
        } elseif ($service === 'Commercial Building') {
            $view = 'emails.commercial_building_quote';
        } elseif ($service === 'Interior Designing & Fabrication') {
            $view = 'emails.interior_designing_&_fabrication_quote';
        }elseif ($service === 'Housing Plan Drawing') {
            $view = 'emails.housing_plan_drawing_quote';
        }elseif ($service === 'BOQ') {
            $view = 'emails.boq_quote';
        }else {
            $view = 'emails.quote';
        }
    
        return new Content(
            view: $view,
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
