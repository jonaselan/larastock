<?php

namespace larastock\Listeners;

use larastock\Events\PostUserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
// use Mail;

class SendEmailWelcome
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
     * @param  Event  $event
     * @return void
     */
    public function handle(PostUserRegister $event)
    {
      $user = $event->getUser();
      Log::info('welcome '.$user->name);
      // Mail::send('email', ['user' => $user], function ($m) use ($user) {
      //   $m->to($user->email, $user->name)->subject('Welcome my Friend!');
      // });
    }
}
