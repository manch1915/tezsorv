<?php

use App\Mail\DemoMail;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sendmail', function () {
    $mailData = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp.'
    ];

    Mail::to('levon.10h.y@gmail.com')->send(new DemoMail($mailData));
})->purpose('Display an inspiring quote');
