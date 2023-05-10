<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;


class profileMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */



    /**
     *
     *
     *  @return void
     *
     */


    public function __construct(private User $user)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Profile Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $date = $this->user->created_at;
        $id = $this->user->id;


        $href =url('').'/verify_email/'.base64_encode($date.'///'.$id);

        return new Content(
            view: 'dashboard.emails.inscription',
            with:[
                'email'=>$this->user->email,
                'name'=>$this->user->first_name,
                'href'=>$href,

            ]


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
