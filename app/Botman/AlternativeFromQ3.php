<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ3 extends MainConversation
{
    public function run()
    {
        $this->askMainCity();
    }
}