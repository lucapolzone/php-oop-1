<?php

class Production {

  public $title;
  public $language;
  public $vote;
  

  function __construct(
    string $title,
    string $language,
    int $vote,
  ) {
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
  }

} 

$the_last_samurai = new Production('The Last Samurai', 'English', 8);

$hero = new Production('HERO', 'Chinese', 10);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <!-- charset & viewport -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- seo -->
  <meta name="author" content="Luca Polzone" />
  <!-- title -->
  <title>Esercizio - PHP OOP 1</title>
  <!-- Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
</body>
</html>