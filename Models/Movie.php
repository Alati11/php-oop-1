<?php
require_once __DIR__ . '/../index.php';

class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct($_profit, $_duration)
    {
    $this->profit = $_profit;
    $this->duration = $_duration;    

    }
}

