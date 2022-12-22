<?php

include 'include/pdo.php';

if(isset($_POST) && !empty($_POST)){

    $sth = $pdo->prepare("INSERT INTO recette (titre, ingredient, description, image, etape, duree) VALUES (:titre, :ingredient, :description, :image, :etape, :duree)");

    $sth->execute([
        'titre' => htmlentities($_POST['titre']),
        'ingredient' => htmlentities($_POST['ingredient']),
        'description' => htmlentities($_POST['description']),
        'image' => htmlentities($_POST['image']),
        'etape' => htmlentities($_POST['etape']),
        'duree' => htmlentities($_POST['duree'])
    ]);

    header('Location:gestion.php');
}

include 'include/header.php';
include 'include/form.php';