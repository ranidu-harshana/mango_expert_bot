<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ8 extends MainConversation
{
    public function saySuitablePlantForPot() {
        $this->say('Based on the data you have provided, this artificial intelligence will consider our data and suggest the most suitable mango variety for you.');
        
        $zone = $this->bot->userStorage()->get('zone');
        $space = $this->bot->userStorage()->get('plant_space');

        $database = app('firebase.database');
        $results = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/')->getChildKeys();
        $suitable_mangoes = [];
        foreach ($results as $key => $mango_variety) {
            $result = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/'.$mango_variety)->getValue();
            if($result[$zone] && $result[$space]) {
                array_push($suitable_mangoes, $mango_variety);
            }
        }
        $this->mango_variety = $suitable_mangoes[rand(0, count($suitable_mangoes)-1)];
        $this->bot->userStorage()->save([
            'mango_variety' => $this->mango_variety
        ]);
        $this->say('That is the most suitable plant for you is <span style="color: #5cb85c"><b>'.$this->mango_variety. '</b></span>');
        $this->askNeedFutherAdvice();
    }

    public function run()
    {
        // This will be called immediately
        $this->saySuitablePlantForPot();
    }
}