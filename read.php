<?php

include 'include/pdo.php';
include 'include/header.php';

$id = intval($_GET['id']);

$sth = $pdo->prepare("SELECT * FROM recette WHERE id = ?");
$sth->execute([$id]);

$recette = $sth->fetch();

?>

<h1><?= $recette['titre'] ?></h1>
<p><?= $recette['description'] ?></p>
<p><?= $recette['ingredient'] ?></p>
<p><?= $recette['etape'] ?></p>
<p><?= $recette['duree'] ?></p>

<a class="btn btn-danger" href="delete.php?id=<?= $recette['id'] ?>">Supprimer</a>

<?php

