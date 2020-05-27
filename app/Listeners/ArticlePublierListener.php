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
        $users = User::all();
        $i =1;
        
        foreach ($users as $user) {
            $when = now()->addSeconds($i * 5);
            Mail::to($user->email)->later($when, new NewsArticle2($event->article, $user));
            $i++;
        }
        foreach ($newsletters as $newsletter) {
            $when = now()->addSeconds($i * 5);
            Mail::to($newsletter->email)->later($when, new NewsArticle($event->article));
            $i++;
        }
    }
}
