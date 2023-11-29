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
        $this->profit = $profit;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }

    public function getProfit() {
        return $this->profit;
    }

    public function getDuration() {
        return $this->duration;
    }

}
