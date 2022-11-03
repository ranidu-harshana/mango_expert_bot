<?php

namespace App\Botman;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;

class MangoDetailsConversation extends Conversation
{

    public function mangoPlantDetails()
    {
        $this->ask('Enter your mango plant name', function(Answer $answer) {
            $this->mango_plant = $answer->getText();

            $database = app('firebase.database');
            $reference = $database->getReference('mango_varieties/-N0jBoLWAU2xL-2RcNW3');
            $snapshot = $reference->getSnapshot()->getValue();
            $all_mango_varieties_simple = array_map('strtolower',array_keys($snapshot));
            
            if (in_array(strtolower($this->mango_plant), $all_mango_varieties_simple)) {
                try {
                    $res = $snapshot[ucfirst(strtolower($this->mango_plant))]["details"];
                    $plantName = ucfirst(strtolower($this->mango_plant));
                } catch (\Throwable $th) {
                    try {
                        $res = $snapshot[ucwords(strtolower($this->mango_plant), " ")]["details"];
                        $plantName = ucwords(strtolower($this->mango_plant), " ");
                    } catch (\Throwable $th) {
                        $res = $th;
                    }
                }
                
                $detailsStr = "<h3>".$plantName."</h3><p>";

                for ($i=0; $i < count($res); $i++) { 
                    $detailsStr .= "<b>*&nbsp;</b>" . $res[$i]."<br>";
                }

                $detailsStr .= "</p>";
                $this->say($detailsStr);
            } else {
                $this->repeat("Enter your mango plant name");
            }
        });
    }
    

    public function run()
    {
        $this->mangoPlantDetails();
    }
}