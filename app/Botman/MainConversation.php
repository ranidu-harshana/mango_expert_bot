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

            if(strtolower($this->answerQ) == 'yes') {
                $this->askLandType();
            }else if(strtolower($this->answerQ) == 'no'){
                $this->bot->startConversation(new AlternativeFromQ2());
            }else{
                $this->repeat('Just say Yes or No');
            }
            
        });
    }

    public function askLandType()
    {
        $this->ask('Is it for landscaping or commercial cultivation?', function(Answer $answer) {
            $this->land = $answer->getText();

            if(strtolower($this->land) == 'land') {
                $this->askMainCity();
            }else if(strtolower($this->land) == 'commercial'){
                $this->bot->startConversation(new AlternativeFromQ3());
            }else{
                $this->repeat('Just say Land or Commercial');
            }
            
        });
    }

    public function askMainCity()
    {
        $this->ask('What is the main city where your home is located?', function(Answer $answer) {
            $this->main_city = $answer->getText();

            if(strtolower($this->main_city) == 'colombo') {
                $this->say('Sir! According to our data you belong to the (Wet/Intermediate/Dry) Zone');
            }else{
                $this->repeat('Enter a correct zone');
            }
            $this->askIdeaOfMangoVariety();
        });
    }

    public function askIdeaOfMangoVariety()
    {
        $this->ask('Have you already got an idea of the verities of mango plants you are going to plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(strtolower($this->answerQ) == 'no'){
                $this->say('According to our data files, you belong to an area 1300 meters below sea level. Therefore, you are in a suitable environment to grow mangoes');
                $this->askPlantationIndent();
            }else if(strtolower($this->answerQ) == 'yes'){
                $this->bot->startConversation(new AlternativeFromQ6());
            }else{
                $this->repeat('Just say Yes or No');
            }
            
        });
    }

    public function askPlantationIndent()
    {
        $this->ask('Do you intend to plant it in a pot or in the ground?', function(Answer $answer) {
            $this->plant_space = $answer->getText();

            if(strtolower($this->plant_space) == 'ground') {
                $this->askUnderstadingNatureSoil();
            }else if(strtolower($this->plant_space) == 'pot'){
                $this->bot->startConversation(new AlternativeFromQ8());
            }else{
                $this->repeat('Just say Pot or Ground');
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

            if(strtolower($this->answerQ) == 'yes') {
                $this->askNMonth();
            }else if(strtolower($this->answerQ) == 'no'){
                $this->bot->startConversation(new AlternativeFromQ13());
            }else{
                $this->repeat('Just say Yes or No');
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

            if(strtolower($this->answerQ) == 'no') {
                $this->say('If so, please refer to this paper in relation to this PDF');
                $this->askMoreInfo();
            }else if(strtolower($this->answerQ) == 'yes'){
                $this->bot->startConversation(new AlternativeFromQ17());
            }else{
                $this->repeat('Just say Yes or No');
            }

        });
    }

    public function askMoreInfo()
    {
        $this->ask('Do you need more information?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(strtolower($this->answerQ) == 'yes') {
                $this->say('Contact this Agri Development Officer');
                return true;
            }else if(strtolower($this->answerQ) == 'no'){
                $this->bot->startConversation(new AlternativeFromQ19());
            }else{
                $this->repeat('Just say Yes or No');
            }
        });
    }

    public function run()
    {
        $this->askNewToMangoPlanting();
    }
}