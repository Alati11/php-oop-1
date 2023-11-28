<?php

class Production
{
    public $title;
    public $language;
    public $rating;
    
    function __construct($_title, $_language, $_rating)   
    {
      $this->title = $_title;
      $this->language = $_language;
      $this->rating = $_rating;
    }

    public function myfilms() {
        echo "Film preferito:";
    }
}



$film1 = new Production('Seven', 'Inglese', '5');
$film2 = new Production('Inception', 'Inglese', '4');
$film3 = new Production('C era una volta in America', 'Italiano', '5');



$films = [
    $film1,
    $film2,
    $film3,
];

var_dump($films);


foreach ($films as $production) {
?>
    <h4><?php $production->myfilms() ?></h4>    
     <div>
        <p><?= $production->title. ' ' . $production->language. ' '. $production->rating ?></p>    
    </div>
<?php
}
