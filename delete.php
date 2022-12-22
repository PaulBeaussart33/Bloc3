<?php
include 'include/pdo.php';

$id = intval($_GET['id']);

$sth = $pdo->prepare("DELETE FROM recette WHERE id = ?");
$sth->execute([$id]);

header('Location:gestion.php');