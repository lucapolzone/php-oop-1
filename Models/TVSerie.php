<?php

class TVSerie extends Production{
  
    public $seasons;

    public function __construct(
        String $title,
        String $language,
        int $vote,
        Genre $genre,
        int $seasons,
    ){

        parent::__construct($title, $language, $vote, $genre);
        
        $this->seasons = $seasons;
    }
}