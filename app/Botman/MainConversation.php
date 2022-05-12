<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Botman\AlternativeFromQ2;
class MainConversation extends Conversation
{
    protected $answerQ;
    protected $land = '';
    protected $main_city = '';
    protected $plant_space = '';
    protected $mango_variety = '';
    protected $month = '';
    protected $season = '';

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
                $this->bot->userStorage()->save([
                    'land' => 'Landscape'
                ]);
                $this->askMainCity();
            }else if(preg_match("/commercial/i", strtolower($this->land))){
                $this->bot->userStorage()->save([
                    'land' => 'Commercial'
                ]);
                $this->bot->startConversation(new AlternativeFromQ3());
            }else{
                $this->repeat('Just say Land or Commercial');
            }
            
        });
    }

    public function askMainCity() {
        $this->ask('What is the main city where your home is located?', function(Answer $answer) {
            $this->main_city = $answer->getText();

            $database = app('firebase.database');

            $reference = $database->getReference('cant_cultivate/-N0jDbEceHRDRrgaw7T4');
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            $cant_cultivate_zones = array_map('strtolower',array_keys($value));
            $imploded_cant_cultivate_cities = implode('|', $cant_cultivate_zones);

            $reference = $database->getReference('zones/-N0j9C_qP_ZV_Zk-e0Qg');
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            $all_zones_simple = array_map('strtolower',array_keys($value));

            $imploded_cities = implode('|', $all_zones_simple);
            if(preg_match('/'.$imploded_cities.'/i', strtolower($this->main_city), $matched)) {
                $this->say('Sir! According to our data you belong to the <span style="color: #5cb85c"><b>'. $value[ucwords(strtolower($matched[0]))] . '</b></span>');
                $impolded_zone = explode(' ', $value[ucwords(strtolower($matched[0]))]);
                $this->bot->userStorage()->save([
                    'main_city' => $this->main_city,
                    'zone' =>  strtolower($impolded_zone[0]) .'_'. strtolower($impolded_zone[1]),
                ]);
                $this->askIdeaOfMangoVariety();
            }else if(preg_match('/'.$imploded_cant_cultivate_cities.'/i', strtolower($this->main_city), $matched)) {
                $this->bot->startConversation(new NotSuitableZone());
            }else{
                $this->repeat('Enter a correct zone');
            }
        });
    }

    public function askIdeaOfMangoVariety() {
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

    public function askPlantationIndent() {
        $this->ask('Do you intend to plant it in a pot or in the ground?', function(Answer $answer) {
            $this->plant_space = $answer->getText();

            if(preg_match("/ground/i", strtolower($this->plant_space))) {
                $this->bot->userStorage()->save([
                    'plant_space' => 'ground',
                ]);
                $this->askUnderstadingNatureSoil();
            }else if(preg_match("/pot/i", strtolower($this->plant_space))){
                $this->bot->userStorage()->save([
                    'plant_space' => 'pot',
                ]);
                $this->bot->startConversation(new AlternativeFromQ8());
            }else{
                $this->repeat('Just say Pot or Ground');
            }
            
        });
    }

    public function askUnderstadingNatureSoil() {
        $this->ask('Do you have an understanding of the nature of the soil at the chosen location where you intend to plant the plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            $this->say('It is also a land of fine gravel Or a land with clay soils and rough soils');
            $this->say('Based on the data you have provided, this artificial intelligence will consider our data and suggest the most suitable mango variety for you.');
            
            $zone = $this->bot->userStorage()->get('zone');
            $space = $this->bot->userStorage()->get('plant_space');

            $database = app('firebase.database');
            $results = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/')->getChildKeys();
            $suitable_mangoes = [];
            foreach ($results as $key => $mango_variety) {
                $result = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/'.$mango_variety)->getValue();
                if($result[$zone] && $result[$space]) {
                    array_push($suitable_mangoes, $mango_variety);
                }
            }
            $this->mango_variety = $suitable_mangoes[rand(0, count($suitable_mangoes)-1)];
            $this->bot->userStorage()->save([
                'mango_variety' => $this->mango_variety
            ]);
            $this->say('That is the most suitable plant for you is <span style="color: #5cb85c"><b>'.$this->mango_variety. '</b></span>');
            $this->askNeedFutherAdvice();
        });
    }

    public function askNeedFutherAdvice() {
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

    public function askNMonth() {
        $this->ask('In what month do you expect to plant this plant?', function(Answer $answer) {
            $this->month = $answer->getText();

            $ezone = explode('_', $this->bot->userStorage()->get('zone'));
            if(preg_match("/(september|october|november|december|january|february|march)/i", strtolower($this->month))){
                $this->season = 'Maha';
                $this->say('The month you choose belongs to the <span style="color: #5cb85c"><b>'. $this->season .' </b></span> season');

                $this->say('But the area you are in belongs to the <span style="color: #5cb85c"><b> '. $ezone[0] .' '. $ezone[1] .' </b></span> so it is / is not suitable for it');
                $this->bot->userStorage()->save([
                    'month' => $this->month,
                    'season' => $this->season
                ]);
                $this->askKnowladgeGrowing();
            }elseif(preg_match("/(may|june|july|august)/i", strtolower($this->month))) {    
                $this->season = 'Yala';

                $this->say('The month you choose belongs to the <span style="color: #5cb85c"><b>'. $this->season .'</b></span> season');
                
                if($this->bot->userStorage()->get('zone') == 'dry_zone') {
                    $this->say('But the area you are in belongs to the <span style="color: #5cb85c"><b> '. $ezone[0] .' '. $ezone[1] .' </b></span> so it is not suitable for it');
                    $this->season = 'Maha';
                }else{
                    $this->say('But the area you are in belongs to the <span style="color: #5cb85c"><b> '. $ezone[0] .' '. $ezone[1] .' </b></span> so it is suitable for it');
                }

                $this->bot->userStorage()->save([
                    'month' => $this->month,
                    'season' => $this->season
                ]);
                $this->askKnowladgeGrowing();
            }else {
                $this->repeat('Month cannot be recognized to identify the season!.');
            }
            
        });
    }

    public function askKnowladgeGrowing() {
        $this->ask('<span style="color: #5cb85c"><b>' .$this->season. '</b></span> season is the best time for you depending on your area. Do you have any knowledge about growing this mango plant?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/no/i", strtolower($this->answerQ))) {
                $this->say('If so, please refer to this paper in relation to this PDF <br><a class="btn btn-success" href="../planting/details" target="_blank">Click</a>');
                
                $this->askMoreInfo();
            }else if(preg_match("/yes/i", strtolower($this->answerQ))){
                $this->bot->startConversation(new AlternativeFromQ17());
            }else{
                $this->repeat('Just say Yes or No');
            }

        });
    }

    public function askMoreInfo() {
        $this->ask('Do you need more information?', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if(preg_match("/yes/i", strtolower($this->answerQ))) {
                $this->say('Contact this Agri Development Officer');
                $this->say('Thank you!');
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