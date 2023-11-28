<?php

class Production
{
    public $title;
    public $language;
    public $rating;
    
    function __construct($_title, $_language, $_rating)   
    {
      $this->title = $_title;
      $this->languade = $_languade;
      $this->rating = $_rating;
    }
}

$film1 = new Product('Seven', 'Inglese', '5 stelle');
$film2 = new Product('Inception', 'Inglese', '4 stelle');
$film3 = new Product('C era una volta in America', 'Italiano', '5 stelle');


var_dump($film1);