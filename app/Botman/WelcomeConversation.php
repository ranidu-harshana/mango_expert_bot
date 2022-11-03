<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class WelcomeConversation extends Conversation 
{
    protected $answerQ;
    public function run()
    {
        $this->ask('What are you looking at about mango plantation ? <br><br> I. Mango verieties <br> II. Mango diseases <br> III. Details of verities <br> IV. Fertilizer <br> V. Instructions', function(Answer $answer) {
            $this->answerQ = $answer->getText();

            if (preg_match("/mango verieties/i", strtolower($this->answerQ))) {
                $this->say("<p>What is mango? Or Why mango</p><br><p>A mango is an edible stone fruit produced by the tropical tree Mangifera indica. It is believed to have originated in the region between northwestern Myanmar, Bangladesh, and northeastern India. M. indica has been cultivated in South and Southeast Asia since ancient times resulting in two types of modern mango cultivars: the \"Indian type\" and the \"Southeast Asian type\".Other species in the genus Mangifera also produce edible fruits that are also called \"mangoes\", the majority of which are found in the Malesian ecoregion. <br><br>Worldwide, there are several hundred cultivars of mango. Depending on the cultivar, mango fruit varies in size, shape, sweetness, skin color, and flesh color which may be pale yellow, gold, green, or orange. Mango is the national fruit of India, Pakistan and the Philippines, while the mango tree is the national tree of Bangladesh. <br><br>Mangoes originated from the region between northwestern Myanmar, Bangladesh, and northeastern India. The mango is considered an evolutionary anachronism, whereby seed dispersal was once accomplished by a now-extinct evolutionary forager, such as a megafauna mammal.</p>");
            } else if (preg_match("/mango diseases/i", strtolower($this->answerQ))) {
                $this->say("Go to this link and refer the more details. <a href='https://vikaspedia.in/agriculture/crop-production/integrated-pest-managment/ipm-for-fruit-crops/ipm-strategies-for-mango/mango-diseases-and-symptoms' style='color: blue' target='_blank'><b>LINK</b></a>");
            } else if (preg_match("/details/i", strtolower($this->answerQ))) {
                $this->bot->startConversation(new MangoDetailsConversation());
            } else if (preg_match("/fertilizer/i", strtolower($this->answerQ))) {
                $this->say("<b><u>Fertilizer</b></u><br><br><p><u>Fertilizing young trees</u></p><br><p>In the first-year Mango trees receive 1 to 2 pounds of slow-release 10-20-20 fertilizer divided into three or four applications before they grow. During their second and third years, they should be given 11/2 to 3 pounds of 10-20-20 fertilizer in the same way. Fertilizer is spread directly under the leaf drip line and applied to the soil. Complete fertilizer containing 6 to 10 percent nitrogen, 6 to 10 percent phosphorus, and 4 to 6 percent magnesium is suitable for young Mango trees. Be careful not to apply too much fertilizer to young trees.</p><br><u>Fertilizing Mango trees</u><p><br>About 1 pound of complete, slow-release fertilizer per inch of trunk 4 to 5 feet above the ground. Half of this fertilizer is applied before flowering, not during flowering, and the rest after harvesting Mangoes. Generally, 9 to 15 percent potassium and 2 to 4 percent phosphorus should be reduced in the fertilizer for trees. Commonly available fertilizer mixtures that are satisfactory for Mango trees include 6-6-6 and 8-3-9-2, indicating 2 magnesium. To encourage flower and Mango yield, additional nitrogen fertilizers are applied before the Mango trees begin to flower.</p>");
            } else if(preg_match("/instructions/i", strtolower($this->answerQ))) {
                $this->bot->startConversation(new MainConversation());
            } else {
                $this->repeat('Just ask your question');
            }
        });
    }
}