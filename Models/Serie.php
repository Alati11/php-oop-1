<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    public $season;

    function __construct($_title, $_language, $_season, $_rating)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->setSeason($_season);
    }
    public function setSeason(int $_season)
    {   
        if($_season >= 1) {
            $this->season = $_season;
        }
    }       
    public function getSeason() {
        return $this->season;
    }
    
    public function getDatails()
    {
        $details = parent::getDatails();
        return $details . "<br>Season: $this->season";
    }

    
}