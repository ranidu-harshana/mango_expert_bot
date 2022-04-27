<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Botman\AlternativeFromQ2;

class MainConversation extends Conversation
{
    protected $answerQ;

    protected $land;

    protected $main_city;
    protected $plant_space;
    protected $month;
    protected $season = 'Yala';

    public function askNewToMangoPlanting()
    {
        $this->ask('Are you new to planting mango trees?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if($this->answerQ == 'yes') {
                $this->askLandType();
            }else{
                $this->bot->startConversation(new AlternativeFromQ2());
            }
            
        });
    }

    public function askLandType()
    {
        $this->ask('Is it for landscaping or commercial cultivation?', function(Answer $answer) {
            $this->land = $answer->getText();

            if($this->land == 'land') {
                $this->askMainCity();
            }else{
                // create another flow
            }
            
        });
    }

    public function askMainCity()
    {
        $this->ask('What is the main city where your home is located?', function(Answer $answer) {
            $this->main_city = $answer->getText();

            if($this->main_city == 'colombo') {
                $this->say('Sir! According to our data you belong to the (Wet/Intermediate/Dry) Zone');
            }
            $this->askIdeaOfMangoVariety();
        });
    }

    public function askIdeaOfMangoVariety()
    {
        $this->ask('Have you already got an idea of the verities of mango plants you are going to plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if($this->answerQ == 'no'){
                $this->say('According to our data files, you belong to an area 1300 meters below sea level. Therefore, you are in a suitable environment to grow mangoes');
                $this->askPlantationIndent();
            }else{
                // another flow
            }
            
        });
    }

    public function askPlantationIndent()
    {
        $this->ask('Do you intend to plant it in a pot or in the ground?', function(Answer $answer) {
            $this->plant_space = $answer->getText();

            if($this->plant_space == 'Ground') {
                $this->askUnderstadingNatureSoil();
            }else{
                // create another flow
            }
            
        });
    }

    public function askUnderstadingNatureSoil()
    {
        $this->ask('Do you have an understanding of the nature of the soil at the chosen location where you intend to plant the plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            $this->say('It is also a land of fine gravel Or a land with clay soils and rough soils');
            $this->say('Based on the data you have provided, this artificial intelligence will consider our data and suggest the most suitable mango variety for you.');
            
            // operate answer for this
            $this->say('That is the most suitable plant for you is …………….');
            $this->askNeedFutherAdvice();
        });
    }

    public function askNeedFutherAdvice()
    {
        $this->ask('Do you need further advice to cultivate this very successfully?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if($this->answerQ == 'yes') {
                $this->askNMonth();
            }else{
                // create another flow
            }
            
        });
    }

    public function askNMonth()
    {
        $this->ask('In what month do you expect to plant this plant?', function(Answer $answer) {
            $this->month = $answer->getText();

            // operate answer for this
            $this->say('The month you choose belongs to the Yala / Maha season');

            // operate answer for this
            $this->say('But the area you are in belongs to the wet zone so it is / is not suitable for it');

            $this->askKnowladgeGrowing();
        });
    }

    public function askKnowladgeGrowing()
    {
        $this->ask($this->season.' season is the best time for you depending on your area. Do you have any knowledge about growing this mango plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if($this->answerQ == 'no') {
                $this->say('If so, please refer to this paper in relation to this PDF');
                $this->askMoreInfo();
            }else{
                // create another flow
            }

        });
    }

    public function askMoreInfo()
    {
        $this->ask('Do you need more information?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if($this->answerQ == 'yes') {
                $this->say('Contact this Agri Development Officer');
                return true;
            }else{
                // create another flow
            }
        });
    }

    public function run()
    {
        $this->askNewToMangoPlanting();
    }
}