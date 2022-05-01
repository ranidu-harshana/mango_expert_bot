<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ17 extends Conversation
{
    public function askKnowladgeGrowing()
    {
        $postData = [
            'land' => $this->bot->userStorage()->get('land'),
            'main_city'=>$this->bot->userStorage()->get('main_city'),
            'zone'=> $this->bot->userStorage()->get('zone'),
            'month'=> $this->bot->userStorage()->get('month')
        ];
        $database = app('firebase.database');
        $postRef = $database->getReference('user_profile/'.session('verfied_user_id'))->push($postData);
        $this->say('Thank you!');
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askKnowladgeGrowing();
    }
}