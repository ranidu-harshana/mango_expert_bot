<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class WelcomeConversation extends Conversation
{
    protected $answerQ;
    public function run()
    {
        $this->ask('What are you looking at about mango plantation ? <br><br> I. Mango verieties <br> II. Mango diseases <br> III. Details of verities <br> IV. Fertilizer <br> V. Instructions', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/instructions/i", strtolower($this->answerQ))) {
                $this->bot->startConversation(new MainConversation());
            } else {
                $this->say('You selected: '. $this->answerQ);
            }
        });
    }
}