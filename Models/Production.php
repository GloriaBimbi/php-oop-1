<?php

require __DIR__ . "/Genre.php";
require __DIR__ . "/Movie.php";
require __DIR__ . "/TvSerie.php";

class Production{
    public string $title;
    public string $language;
    public string $vote;
    public $genre;

    public function __construct($title, $language, $vote_number, Genre $genre){
        $this->title = $title;
        $this->language = $language;
        $this->vote = Production::set_vote($vote_number);
        $this->genre = $genre;
    }
    
    public static function set_vote($vote_number){
        $relative_vote = $vote_number . '/' . 10;
        return $relative_vote;
    }

    public function get_title(){
        return $this->title;
    }
    
};