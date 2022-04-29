<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Botman\AlternativeFromQ2;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
class MainConversation extends Conversation
{
    protected $answerQ;
    protected $land;
    protected $main_city;
    protected $plant_space;
    protected $month;
    protected $season = 'Yala';

    // public function test() {
        
    //     $this->attachment = new File("http://127.0.0.1:8000/assets/pdf/hi.pdf", [
    //         'custom_payload' => false,
    //     ]);
        
    //     // Build message object
    //     $message = OutgoingMessage::create('This is my text')
    //                 ->withAttachment($this->attachment);
        
    //     // Reply message object
    //     $this->bot->reply($message);
    // }

    public function askNewToMangoPlanting()
    {
        $this->ask('Are you new to planting mango trees?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/yes/i", strtolower($this->answerQ))) {
                $this->askLandType();
            }else if(preg_match("/no/i", strtolower($this->answerQ))){
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

            if(preg_match("/land/i", strtolower($this->land))) {
                $this->askMainCity();
            }else if(preg_match("/commercial/i", strtolower($this->land))){
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

            $database = app('firebase.database');
            $reference = $database->getReference('zones/-N0j9C_qP_ZV_Zk-e0Qg');
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            $all_zones_simple = array_map('strtolower',array_keys($value));
            if(in_array(strtolower($this->main_city), $all_zones_simple)) {
                $this->say('Sir! According to our data you belong to the '. $value[ucwords(strtolower($this->main_city))]);
                $this->askIdeaOfMangoVariety();
            }else{
                $this->repeat('Enter a correct zone');
            }
        });
    }

    public function askIdeaOfMangoVariety()
    {
        $this->ask('Have you already got an idea of the verities of mango plants you are going to plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/no/i", strtolower($this->answerQ))){
                $this->say('According to our data files, you belong to an area 1300 meters below sea level. Therefore, you are in a suitable environment to grow mangoes');
                $this->askPlantationIndent();
            }else if(preg_match("/yes/i", strtolower($this->answerQ))){
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

            if(preg_match("/ground/i", strtolower($this->plant_space))) {
                $this->askUnderstadingNatureSoil();
            }else if(preg_match("/pot/i", strtolower($this->plant_space))){
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
        $this->askNewToMangoPlanting();
    }
}