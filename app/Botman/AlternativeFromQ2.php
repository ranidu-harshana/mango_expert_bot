<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ2 extends MainConversation
{
    public function askProblemFertilizing()
    {
        $this->ask('Do you have a problem with fertilizing after planting?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/yes/i", strtolower($this->answerQ))) {
                $this->say('Refer this fertilizer details');
                $this->say('Refer this fertilizer details. You will recieve a email with all the fertilizer details. <br><a class="btn btn-success" href="../user/fertilizermail" target="_parent">Click</a>');

                $this->say('Thank you!');
            }else if(preg_match("/no/i", strtolower($this->answerQ))){
                $this->say('Contact 011-2034300 Agri Development Officer for more information');
                
                $this->say('Thank you!');
            }else{
                $this->repeat('Just say Yes or No');
            }
        });
    }
    
    public function run()
    {
        // This will be called immediately
        $this->askProblemFertilizing();
    }
}