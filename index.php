<?php
// creazione della classe
class Production {

    public $title;
    public $language;
    public $rating;

    // COSTRUTTORE
    function __construct($_title, $_language, $_rating)
    {
              $this->title = $_title;
              $this->language = $_language;
              $this->rating = $_rating;  
    }

    // Controllo
    // SETTER
    public function setRating($rating) {

        if(is_numeric($rating) && $rating >= 0) {

            $this->rating = intval($rating);
        } else {
            var_dump('il parametro non è un numero ');
        }
        
    }
    // GETTER
    public function getRating() {

        return $this->rating;
    }

}
//Creazione delle istanze della classe
$movie_1 = new Production('il signore degli anelli', 'Eng', 10);

// $movie_1 = new Production();
//Assegnazione valore alle istanze
// $movie_1->title = 'Il signore degli anelli';
// $movie_1->language = 'Eng';
// $movie_1->setRating(10);

var_dump($movie_1);
// var_dump('questo film si chiama'. ' ' . $movie_1->title);
// var_dump('il voto di questo film è' . ' ' . $movie_1->getRating());

$movie_2 = new Production('Marco Baldo', 'Ita', 3);
// $movie_2 = new Production;
// $movie_2->title = 'Marco baldo';
// $movie_2->language = 'Ita';
// $movie_2->rating = 3;

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