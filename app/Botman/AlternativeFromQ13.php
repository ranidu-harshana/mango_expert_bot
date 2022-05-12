<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ13 extends MainConversation
{
    protected $sex;


    public function askNeedFutherAdvice()
    {
        $postData = [
            'land' => $this->bot->userStorage()->get('land'),
            'main_city'=>$this->bot->userStorage()->get('main_city'),
            'zone'=> $this->bot->userStorage()->get('zone'),
            'month'=> $this->bot->userStorage()->get('month'),
            'season'=> $this->bot->userStorage()->get('season'),
            'mango_variety'=> $this->bot->userStorage()->get('mango_variety'),
            'date'=> date("Y-m-d"),
        ];
        $database = app('firebase.database');
        $postRef = $database->getReference('user_profile/'.session('verfied_user_id'))->push($postData);
        $this->bot->userStorage()->delete();
        
        $this->say('Thank you!');
        return true;
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askNeedFutherAdvice();
    }
}