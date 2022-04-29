<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class AlternativeFromQ8 extends Conversation
{
    protected $answerQ;
    protected $land;
    protected $main_city;
    protected $plant_space;
    protected $month;
    protected $season = 'Yala';

    public function saySuitablePlantForPot() {
        $this->bot->typesAndWaits(1);
        $this->say('Based on the data you have provided, this artificial intelligence will consider our data and suggest the most suitable mango variety for you.');
        
        $this->bot->typesAndWaits(2);
        // opearte
        $this->say('That is the most suitable plant for you is …………….');
        $this->askNeedFutherAdvice();
    }

    public function askNeedFutherAdvice()
    {
        $this->ask('Do you need further advice to cultivate this very successfully?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/yes/i", strtolower($this->answerQ))) {
                $this->askNMonth();
            }else if(preg_match("/no/i", strtolower($this->answerQ))){
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

            if(preg_match("/no/i", strtolower($this->answerQ))) {
                $this->say('If so, please refer to this paper in relation to this PDF');
                $this->askMoreInfo();
            }else if(preg_match("/yes/i", strtolower($this->answerQ))){
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

            if(preg_match("/yes/i", strtolower($this->answerQ))) {
                $this->say('Contact this Agri Development Officer');
                return true;
            }else if(preg_match("/no/i", strtolower($this->answerQ))){
                $this->bot->startConversation(new AlternativeFromQ19());
            }else{
                $this->repeat('Just say Yes or No');
            }
        });
    }
    
    public function run()
    {
        // This will be called immediately
        $this->saySuitablePlantForPot();
    }
}