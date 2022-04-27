<?php

namespace App\Http\Controllers;

use App\Botman\MainConversation;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            $botman->startConversation(new MainConversation);
        });

        $botman->listen();
    }
}
