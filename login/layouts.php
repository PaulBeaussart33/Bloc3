<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="'.$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/Bloc3/index.css".'">
    <title>Inscription</title>

</head>
<body>
<header>

        <div class="content">
        <nav>
            <ul>
              <li id="menu-item-1"><a href="../index.php">Acceuil</a></li>
              <li id="menu-item-1"><a href="../recettes.php">Recettes</a></li>
              <li id="menu-item-2"><a href="./login.php">connexion</a></li>
              <li id="menu-item-2"><a href="./inscription.php">inscription</a></li>
              <li id="menu-item-3"><a href="./landing.php">compte</a></li>
            </ul>
        </nav>    

';
?>