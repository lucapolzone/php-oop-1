<?php

class Production
{

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

$scrubs = new Production('Scrubs', 'English', 9);

$hero = new Production('HERO', 'Chinese', 10);

// var_dump($scrubs);
// var_dump($hero);

$productions = [$scrubs, $hero];

?>

<!DOCTYPE html>
<html lang="en">

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
  <!-- css link -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container mx-auto border border-4 rounded mt-5">
    <table class="table table-striped table-warning">
      <thead>
        <tr class="table-danger">
          <th scope="col">Title</th>
          <th scope="col">Language</th>
          <th scope="col">Vote</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($productions as $production) : ?>
          <tr>
            <td><?= $production->title ?></td>
            <td><?= $production->language ?></td>
            <td><?= $production->vote ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>

</body>

</html>