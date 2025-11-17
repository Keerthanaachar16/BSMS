<?php

namespace App\Mail;
use App\Models\Complaint;
use App\Models\Officials;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewComplaintAssigned extends Mailable
{
    use Queueable, SerializesModels;

    public $complaint;

    public function __construct(Complaint $complaint)
    {
        $this->complaint = $complaint;
    }

    public function build()
    {
        return $this->subject('New Complaint Assigned to You')->view('emails.new_complaint_assigned');
    }
}