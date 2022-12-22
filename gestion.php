<?php

include 'include/pdo.php';
include 'include/header.php';

$stmt = $pdo->query("SELECT id, titre FROM recette");
$recettes = $stmt->fetchAll();

?><table class="table table-striped table-light">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">modifier</th>
    </tr>
  </thead>

    <?php
    foreach ($recettes as $recette) {
        echo '<tr>';
        echo '<td>' . $recette['id'] . '</td>';
        echo '<td><a href="read.php?id=' . $recette['id'] . '">' . $recette['titre'] . '</a></td>';
        echo '<td><a href="update.php?id=' . $recette['id'] . '">modifier</a></td>';
        echo '</tr>';

    }
    ?>
</table>
    <button type="button" class="btn btn-light" data-toggle="button" aria-pressed="false" autocomplete="off"><a href="create.php">Créer une nouvelle recette</a></button>';

