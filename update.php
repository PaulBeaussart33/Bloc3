<?php
include 'include/pdo.php';
include 'include/header.php';

$id = intval($_GET['id']);

if(isset($_POST) && !empty($_POST)){

    $sth = $pdo->prepare("UPDATE recette SET 
                   titre = :titre,  
                   ingredient = :ingredient,  
                   description = :description,  
                   image = :image,  
                   etape = :etape,  
                   duree = :duree WHERE id = :id");

    $sth->execute([
            'id' => $id,
            'titre' => htmlentities($_POST['titre']),
            'ingredient' => htmlentities($_POST['ingredient']),
            'description' => htmlentities($_POST['description']),
            'image' => htmlentities($_POST['image']),
            'etape' => htmlentities($_POST['etape']),
            'duree' => htmlentities($_POST['duree'])
    ]); 
}


$sth = $pdo->prepare("SELECT * FROM recette WHERE id = ?");
$sth->execute([$id]);

$recette = $sth->fetch();

include 'include/form.php'; ?>
<a href="delete.php?id=<?= $recette['id'] ?>">Supprimer</a>