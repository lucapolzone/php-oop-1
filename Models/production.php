<?php

class Production {

  public $title;
  public $language;
  public $vote;
  public $genre;
  

  function __construct(
    //parametri funzione
    string $title,
    string $language,
    int $vote,
    Genre $genre,
  ) {

    //quello dopo la freccia è un attributo
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
    $this->genre = $genre;
  }
}

