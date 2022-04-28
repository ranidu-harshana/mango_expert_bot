<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ3 extends Conversation
{
    protected $sex;


    public function askSex()
    {
        $this->ask('Hi! What is your sex?', function(Answer $answer) {
            // Save result
            $this->sex = $answer->getText();

            $this->say('sex '.$this->sex);
            // $this->askEmail();
        });
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askSex();
    }
}