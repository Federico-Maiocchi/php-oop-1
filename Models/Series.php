<?php

require_once __DIR__ . '/Production.php';

class Series extends Production {

    public $seasons;
    
    
    function __construct(String $_title, String $_language, Int $_rating , Int $_seasons)
    {
              parent::__construct($_title, $_language, $_rating);
              $this-> setSeason ($_seasons);
              
    }

    public function setSeason($seasons) {

        if(is_numeric($seasons) && $seasons > 0) {

            $this->seasons= intval($seasons);
        } else {
            var_dump('il parametro del numero delle stagioni non è valido ');
        }
    }


    public function getSeason() {
        return $this->seasons;
    }
    

}