<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Series.php';

// creazione della classe
// class Production {

//     public $title;
//     public $language;
//     public $rating = 0;

//     // COSTRUTTORE
//     function __construct($_title, $_language, $_rating = 0)
//     {
//               $this->title = $_title;
//               $this->language = $_language;
//               $this->rating = $_rating;  
//     }

//     // Controllo

//     // SETTER
//     public function setTitle($title) {
//         if (is_string($title) && strlen($title) <= 50 ) {

//             $this->title = strval($title);
//         } else  {
//             var_dump('il parametro del titolo non è valido');
//         }
//     }

//     public function setLanguage($language) {
//         if (is_string($language) && strlen($language) <= 3 ) {

//             $this->title = strval($language);
//         } else  {
//             var_dump('il parametro della lingua non è valido');
//         }
//     }

//     public function setRating($rating) {

//         if(is_numeric($rating) && $rating >= 0) {

//             $this->rating = intval($rating);
//         } else {
//             var_dump('il parametro del numero non è valido ');
//         }
        
//     }

    
//     // GETTER
    
//     public function getTitle() {
//         return $this->title;
//     }

//     public function getLanguage() {
//         return $this->language;
//     }

//     public function getRating() {

//         return $this->rating;
//     }

// }
//Creazione delle istanze della classe
// $movie_1 = new Production('il signore dei tornelli', 'Eng', 10);

// $movie_1 = new Production();
//Assegnazione valore alle istanze
// $movie_1->title = 'Il signore degli anelli';
// $movie_1->language = 'Eng';
// $movie_1->setRating(10);

// var_dump($movie_1);
// var_dump('questo film si chiama'. ' ' . $movie_1->title);
// var_dump('il voto di questo film è' . ' ' . $movie_1->getRating());

// $movie_2 = new Production('Alto,basso e Balto', 'Ita', 3);
// $movie_2 = new Production;
// $movie_2->title = 'Marco baldo';
// $movie_2->language = 'Ita';
// $movie_2->rating = 3;
// var_dump($movie_2);

// $movie_3 = new Production('Isabello il re pugile', 'Deu', 7);
// $movie_4 = new Production('Bartolomeo il gallo cannibale', 'Ita', 3);
// $movie_5 = new Production('Pirati dei balcani ai confini della vodka', 'Spa', 3);


$movie_1 = new Movie('il signore dei tornelli', 'Eng', 10, 20, 90);
$movie_2 = new Movie('Alto,basso e Balto', 'Ita', 3, 50, 45);
$movie_3 = new Movie('Isabello il re pugile', 'Deu', 7, 100, 72);
$movie_4 = new Movie('Bartolomeo il gallo cannibale', 'Ita', 3, 60, 60);
$movie_5 = new Movie('Pirati dei balcani ai confini della vodka', 'Spa', 3, 10, 30);
// var_dump($movie_1,$movie_2,$movie_3,$movie_4,$movie_5);

$season_1 = new Series('Finche la barca va', 'Ita', 4, 19);
$season_2 = new Series('Chin chun chin', 'Chi', 9, 2);
$season_3 = new Series('Il pappagallo infernale', 'Esp', 6, 35);
$season_4 = new Series('La gatta incarne e la bustina di cibo', 'Fra', 2, 7);
$season_5 = new Series('Iron Fede', 'Eng', 10, 5);
// var_dump($season_1,$season_2,$season_3,$season_4,$season_4);



$collection = [
    $movie_1,
    $movie_2,
    $movie_3,
    $movie_4,
    $movie_5,
    $season_1,
    $season_2,
    $season_3,
    $season_4,
    $season_5,
];

// var_dump($collection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <h1>Collezione</h1>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Lingua</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Informazioni</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($collection as $category) {?>
                        <tr>
                            <td class="fw-bold" > <?php echo $category->getTitle() ?> </td>
                            <td> <?php echo $category->getLanguage() ?> </td>
                            <td> <?php echo $category->getRating() ?> </td>
                            <?php if(isset($category->seasons)) { ?>
                                <td>
                                    Stagioni: <?php echo $category->getSeason() ?>
                                </td>
                            <?php } else { ?>
                                <td>
                                    Incassi: <?php echo $category->getProfit()?>,
                                    Durata: <?php echo $category->getDuration() ?> ''
                                </td>        
                            <?php } ?>
                        </tr>   
                   <?php } ?>
                </tbody>
            </table>
        </div>
    </main> 
</body>
</html>

<!-- <td>  &euro;</td> -->