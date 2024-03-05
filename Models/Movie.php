<?php
require_once __DIR__ . "/Production";

class Movie extends Production{
    public int $duration;
    public int $cashier;
    function __construct($title, $language, $vote, Genre $genre, $duration, $cashier){
        parent::__construct($title, $language, $vote, $genre);

        $this->duration = $duration;
        $this->cashier = $cashier;
    }
}

