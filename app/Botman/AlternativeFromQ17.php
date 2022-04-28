<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ17 extends Conversation
{
    public function askKnowladgeGrowing()
    {
        $this->say('Thank you!');
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askKnowladgeGrowing();
    }
}