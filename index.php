<?php

// creazione della classe
class Production {

    public $title;
    public $language;
    public $rating;

    
}
//Creazione delle istanze della classe
$movie_1 = new Production();
//Assegnazione valore alle istanze
$movie_1->title = 'Il signore degli anelli';
$movie_1->language = 'Eng';
$movie_1->rating = 10;

var_dump($movie_1);
// var_dump('questo film si chiama'. ' ' . $movie_1->title);

$movie_2 = new Production;
$movie_2->title = 'Marco baldo';
$movie_2->language = 'Ita';
$movie_2->rating = 3;

var_dump($movie_2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opp</title>
</head>
<body>
    
</body>
</html>