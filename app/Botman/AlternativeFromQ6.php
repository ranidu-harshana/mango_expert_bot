<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ6 extends Conversation
{
    public function askMangoVariety() {
        $this->ask('What is the your selected verities?', function(Answer $answer) {
            $this->mango_variety = $answer->getText();
            
            // operate this
            if(preg_match("/gira aba/i", strtolower($this->mango_variety))) {
                $this->bot->userStorage()->save([
                    'mango_variety' => $this->mango_variety
                ]);
                $this->say('Thanks Good Luck!');
            }else if(preg_match("/pot/i", strtolower($this->mango_variety))){
                $this->askPlantationIndent();
            }else{
                $this->repeat('I cannot identify this mango variety');
            }
            
        });
    }

    public function run()
    {
        // This will be called immediately
        $this->askMangoVariety();
    }
}