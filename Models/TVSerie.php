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

        // calling ancestor's constructor method
        parent::__construct($title, $language, $vote, $genre);
        
        // descendant attribute assignment
        $this->seasons = $seasons;
    }
}