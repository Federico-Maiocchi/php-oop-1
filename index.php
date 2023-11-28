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

    public function setTitle($title) {
        if (is_string($title) && strlen($title) <= 50 ) {

            $this->title = strval($title);
        } else  {
            var_dump('il parametro non è valido');
        }
    }

    public function getTitle() {
        return $this->title;
    }

    


}
//Creazione delle istanze della classe
$movie_1 = new Production('il signore dei tornelli', 'Eng', 10);

// $movie_1 = new Production();
//Assegnazione valore alle istanze
// $movie_1->title = 'Il signore degli anelli';
// $movie_1->language = 'Eng';
// $movie_1->setRating(10);

var_dump($movie_1);
// var_dump('questo film si chiama'. ' ' . $movie_1->title);
// var_dump('il voto di questo film è' . ' ' . $movie_1->getRating());

$movie_2 = new Production('Alto,basso e Balto', 'Ita', 3);
// $movie_2 = new Production;
// $movie_2->title = 'Marco baldo';
// $movie_2->language = 'Ita';
// $movie_2->rating = 3;
var_dump($movie_2);

$movie_3 = new Production('Isabello il re pugile', 'Deu', 7);
$movie_4 = new Production('Bartolomeo il gallo cannibale', 'Ita', 3);
$movie_5 = new Production('Pirati dei balcani ai confini della vodka', 'Ita', 3);



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