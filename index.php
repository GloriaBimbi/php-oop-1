<?php

class Production{
    public string $title;
    public string $language;
    public string $vote;

    public function __construct($title, $language, $vote_number){
        $this->title = $title;
        $this->language = $language;
        $this->vote = Production::set_vote($vote_number);
    }
    
    public static function set_vote($vote_number){
        $relative_vote = $vote_number . '/' . 10;
        return $relative_vote;
    }
}
$film_1 = new Production ('Interstellar', 'English', 10 );
$film_2 = new Production ('Big Fish', 'English', 9 );

var_dump($film_1, $film_2);