<?php
require_once "Production.php";

class TvSerie extends Production{
    public $seasons;
    public $episodes;
    function __construct($title, $language, $vote, Genre $genre, $seasons, $episodes){
        parent::__construct($title, $language, $vote, $genre);

        $this->seasons = $seasons;
        $this->episodes = $episodes;
    }
}

