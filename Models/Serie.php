<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    public $season;

    function __construct($_title, $_language, $_rating, $_profit, $_duration, $_Season)
    {
        parent::__construct($_title, $_language, $_rating, $_profit, $_duration);
        $this->season = $_season;
    }
}