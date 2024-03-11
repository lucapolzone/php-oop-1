<tr>
  <td><?= $production->title ?></td>
  <td><?= $production->language ?></td>
    <td><?= $production->vote ?></td>
    <td><?= $production->genre->name ?></td>
    <td><?= $production->genre->description ?></td>
  <?php if($production instanceof Movie): ?>
    <td><?= $production->profits ?></td>
    <td><?= $production->duration ?></td>
    <td><?= '/' ?></td>
  <?php else: ?>
    <td><?= '/' ?></td>
    <td><?= '/' ?></td>
  <?php endif ?>
  <?php if($production instanceof TVSerie): ?>
      <td><?= $production->seasons ?></td>
  <?php endif ?>
</tr>