<?php 

class Production {

    public $title;
    public $language;
    public $rating = 0;

    // COSTRUTTORE
    function __construct($_title, $_language, $_rating = 0)
    {
              $this->title = $_title;
              $this->language = $_language;
              $this->rating = $_rating;  
    }

    // Controllo

    // SETTER
    public function setTitle($title) {
        if (is_string($title) && strlen($title) <= 50 ) {

            $this->title = strval($title);
        } else  {
            var_dump('il parametro del titolo non è valido');
        }
    }

    public function setLanguage($language) {
        if (is_string($language) && strlen($language) <= 3 ) {

            $this->title = strval($language);
        } else  {
            var_dump('il parametro della lingua non è valido');
        }
    }

    public function setRating($rating) {

        if(is_numeric($rating) && $rating >= 0) {

            $this->rating = intval($rating);
        } else {
            var_dump('il parametro del numero non è valido ');
        }
        
    }

    
    // GETTER
    
    public function getTitle() {
        return $this->title;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {

        return $this->rating;
    }

}