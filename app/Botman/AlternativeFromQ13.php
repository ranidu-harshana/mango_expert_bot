<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ13 extends Conversation
{
    protected $sex;


    public function askNeedFutherAdvice()
    {
        $this->say('Thank you!');
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askNeedFutherAdvice();
    }
}