<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';
require_once __DIR__ .'/Models/Production.php';


$movie1 = new Production('Seven', 'Italiano', '4');
$movie2 = new Production('Inception', 'Inglese','3' , 2000000, 150);
$movie3 = new Production('C era una volta in America', 'Italiano', '5');
$movie4 = new Production('Fight club', 'Italiano', '5');
$movie5 = new Production('Il buono, il brutto e il cattivo', 'Italiano', '5');
$serie1 = new Production('Dr House', 'Inglese', '5');
$serie2 = new Production('Romanzo criminale', 'Italiano', '4');
$serie3 = new Production('Breaking bad', 'Inglese', '5');
$serie4 = new Production('House of cards', 'Inglese', '3');
$serie5 = new Production('Il trono di spade', 'Italiano', '4', 5000000, 100 , 8);


$film11 = new Movie('Il Gladiatore', 'Italiano', '4', '98000 euro','130 min');

$films = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,
];

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
        <h1 class="title">I Miei Film Preferiti</h1>
        <?php foreach($films as $item) { ?>
	    <!-- <li class="film"><?php echo $production->title. ' ' . $production->language. ' '. $production->rating; ?> -->
        <li class="film"><?php echo $item->getDetails() . '<br>' ?>
        <?php } ?>
    </div>
    
</body>
</html>