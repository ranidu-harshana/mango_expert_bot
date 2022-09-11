<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Botman\AlternativeFromQ2;

class NotSuitableZone extends Conversation
{

    public function cantCultivate()
    {
        $this->say('According to our data files, you are not belong to an area 1300 meters below sea level. Therefore, you are not in a suitable environment to grow mangoes');
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
    }
    

    public function run()
    {
        $this->cantCultivate();
    }
}