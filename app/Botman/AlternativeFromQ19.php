<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ19 extends Conversation
{
    public function askMoreInfo()
    {
        $this->say('Thank you!');
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askMoreInfo();
    }
}