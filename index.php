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
    public function getDetails()
    {
    return "Title: $this->title <br> Language: $this->language <br> Rating: $this->rating";
    }

}

$film1 = new Production('Seven', 'Inglese', '5');
$film2 = new Production('Inception', 'Inglese', '4');
$film3 = new Production('C era una volta in America', 'Italiano', '5');
$film4 = new Production('Fight club', 'Italiano', '5');
$film5 = new Production('Il buono, il brutto e il cattivo', 'Italiano', '5');
$film6 = new Production('Dr House', 'Inglese', '5');
$film7 = new Production('Romanzo criminale', 'Italiano', '5');
$film8 = new Production('Breaking bad', 'Inglese', '5');
$film9 = new Production('House of cards', 'Inglese', '4');
$film10 = new Production('Il trono di spade', 'Italiano', '4');


$films = [
    $film1,
    $film2,
    $film3,
    $film5,
    $film6,
    $film7,
    $film8,
    $film9,
    $film10,
];
// var_dump($films);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div class="container">
        <h1 class="title">I miei film preferiti</h1>
        <?php foreach($films as $production) { ?>
	    <!-- <li class="film"><?php echo $production->title. ' ' . $production->language. ' '. $production->rating; ?> -->
        <li class="film"><?php echo $production->getDetails() . '<br>' ?>

        <?php } ?>
    </div>
    
</body>
</html>