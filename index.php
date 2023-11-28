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
$film4 = new Production('Fight Club', 'Italiano', '5');
$film5 = new Production('Il buono, il brutto e i cattivo', 'Italiano', '5');
$film6 = new Production('Matrix', 'Inglese', '5');
$film7 = new Production('L uomo in più', 'Italiano', '5');
$film8 = new Production('Eyes wide shute', 'Inglese', '5');


$films = [
    $film1,
    $film2,
    $film3,
    $film5,
    $film6,
    $film7,
    $film8
];

// var_dump($films);



?>
<?php foreach($films as $production) { ?>
	<li><?php echo $production->title. ' ' . $production->language. ' '. $production->rating; ?>
<?php } ?>