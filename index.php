<?php

require_once __DIR__ . '/Models/Production.php';

require_once __DIR__ . '/Models/Genre.php';

require_once __DIR__ . '/Database/db.php';


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
      
    <?php include __DIR__ . '/Partials/table-head.php'; ?>

      <tbody>
        <?php foreach($productions as $production) : ?>
          
          <?php include __DIR__ . '/Partials/table-row.php'; ?>
          
        <?php endforeach; ?>
    </table>
  </div>

</body>

</html>