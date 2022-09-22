<?php

namespace App\Http\Controllers;

use App\Botman\WelcomeConversation;
use BotMan\BotMan\Middleware\DialogFlowV2;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Hi(.*)|Hello(.*)|hi(.*)|hello(.*)|hy|HY|Hy|HI|HELLO', function ($botman, $message) {
            $botman->startConversation(new WelcomeConversation);
        });

        $botman->fallback(function($botman){
            $botman->reply('Just say Hi to start conversation!.');
        });

        $botman->hears('(.*)thank(.*)', function($botman) {
            $botman->reply('Coversation Stopped.');
        })->stopsConversation();

        $botman->listen();
    }
}
