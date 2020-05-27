<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsArticle2 extends Mailable
{
    use Queueable, SerializesModels;
    public $article;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($article,$user)
    {
        $this->article = $article;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.articlenews2')->subject('New article released');
    }
}
