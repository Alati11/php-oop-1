<?php
require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct($_title, $_language, $_rating, $_profit, $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);    

    }

        public function setProfit(string $_profit)
    {
        if ($_profit) {
        $this->profit = $_profit;
            }
    }
        public function setDuration (string $_duration)
        {
            if($_duration) { 
                $this->duration = $_duration;
            }
        }
    public function getDetails()
    { 
        $details = parent::getDetails(); 
        return $details . " <br> Profit: $this->profit <br> Duration: $this->duration <br>";
    }    
}

