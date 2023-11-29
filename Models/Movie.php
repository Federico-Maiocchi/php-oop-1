<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production {

    public $profit;
    public $duration;

    function __construct(String $_title, String $_language, Int $_rating , Int $_profit , Int $_duration)
    {
              parent::__construct($_title, $_language, $_rating);
              $this-> setProfit ($_profit);
              $this-> setDuration ($_duration);
    }

    public function setProfit($profit) {
        if(is_numeric($profit) && $profit >= 0) {

            $this->profit= intval($profit);
        } else {
            var_dump('il parametro degli incassi non è valido ');
        }
    }

    public function setDuration($duration) {
        if(is_numeric($duration) && $duration > 20) {

            $this->duration= intval($duration);
        } else {
            var_dump('il parametro della durata del film non è valido ');
        }
    }

    public function getProfit() {
        return $this->profit;
    }

    public function getDuration() {
        return $this->duration;
    }

}
