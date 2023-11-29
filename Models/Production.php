<?php

require_once __DIR__ . '/../index.php';

class Production
{
    public $title;
    public $language;
    public $rating;
    
    function __construct($_title, $_language, $_rating)   
    {
    $this->title = $_title;
    $this->language = $_language;
    $this->setRating($_rating);
    }

    public function myfilms() {
        echo "Film preferito:";
    }

    public function setRating($rating)
    {
    if (is_numeric($rating) && $rating >= 3) {
        $this->rating = intval($rating);    
        } else {
            // var_dump('Il voto è troppo basso...');
            echo 'Il voto è troppo basso...';
        }
    }
    public function getRating()
    {
      return $this->rating;
    }
    public function getDetails()
    {
    return "Title: $this->title <br> Language: $this->language <br> Rating: $this->rating";
    }

}