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
        $this->seasons = $seasons;
    }


    public function getSeason() {
        return $this->seasons;
    }
    

}