<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ6 extends MainConversation
{
    public function askMangoVariety() {
        $this->ask('What is the your selected verity?', function(Answer $answer) {
            $this->mango_variety = $answer->getText();
            
            $database = app('firebase.database');
             
            $reference = $database->getReference('mango_varieties/-N0jBoLWAU2xL-2RcNW3');
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            $all_mango_varieties_simple = array_map('strtolower',array_keys($value));
            $imploded_mango_varieties = implode('|', $all_mango_varieties_simple);
            
            $zone = $this->bot->userStorage()->get('zone');
            
            $pregged = preg_match("/".$imploded_mango_varieties."/i", strtolower($this->mango_variety), $matched);
            
            if($pregged) {
                
                try {
                    $res = $value[ucfirst(strtolower($this->mango_variety))][$zone];
                    $decided_plant = ucfirst(strtolower($this->mango_variety));
                } catch (\Throwable $th) {
                    try {
                        $res = $value[ucwords(strtolower($this->mango_variety), " ")][$zone];
                        $decided_plant = ucwords(strtolower($this->mango_variety), " ");
                    } catch (\Throwable $th) {
                        $res = $th;
                    }
                }
                
                if ($res) {
                    $this->say("According to your city <span style='color: #5cb85c'><b>".$decided_plant."</b></span> is suitable!");
                    $this->say("Thanks good luck");
                    $postData = [
                        'land' => $this->bot->userStorage()->get('land'),
                        'main_city'=>$this->bot->userStorage()->get('main_city'),
                        'zone'=> $this->bot->userStorage()->get('zone'),
                        'month'=> $this->bot->userStorage()->get('month'),
                        'season'=> $this->bot->userStorage()->get('season'),
                        'mango_variety'=> $decided_plant,
                        'date'=> date("Y-m-d"),
                    ];
                    $database = app('firebase.database');
                    $postRef = $database->getReference('user_profile/'.session('verfied_user_id'))->push($postData);
                    $this->bot->userStorage()->delete();
    
                    return true;
                } else {
                    $this->say($pregged." ".$matched[0]. " " .$decided_plant); 
                    $this->say("According to your city <span style='color: red'><b>".$decided_plant."</b></span> is not suitable!");
                    $this->askIdeaOfMangoVariety();
                }
            } else {
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