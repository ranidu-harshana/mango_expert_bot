<?php

namespace App\Botman;

class AlternativeFromQ17 extends MainConversation
{
    public function askKnowladgeGrowing()
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
        $this->say('Click here to see fertilizer schedule of your plant. You will recieve a email with the next immediate fertilizer action. <br><a class="btn btn-success" href="../user/welcomemail" target="_parent">Click</a>');
                
        $this->say('Thank you!');
    }

    
    public function run()
    {
        // This will be called immediately
        $this->askKnowladgeGrowing();
    }
}