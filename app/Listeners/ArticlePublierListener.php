<?php

namespace App\Listeners;

use App\Mail\NewsArticle;
use App\Mail\NewsArticle2;
use App\Newsletter;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ArticlePublierListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $newsletters = Newsletter::all();
        // foreach ($newsletters as $news) {
        //     $users = User::where('email', '!=', $news->email);

        // }
        $users = User::all();

        foreach ($newsletters as $newsletter) {
            Mail::to($newsletter->email)->send(new NewsArticle($event->article));
        }
        foreach ($users as $user) {
            Mail::to($user->email)->send(new NewsArticle2($event->article, $user));
        }

    }
}
