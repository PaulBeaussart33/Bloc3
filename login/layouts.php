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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../index.php" class="nav-item nav-link active">Acceuil</a>
            <a href="../recettes.php" class="nav-item nav-link">Recettes</a>
            <a href="./landing.php" class="nav-item nav-link">compte</a>
            <a href="gestion.php" class="nav-item nav-link">gestion</a>
        </div>
        <div class="navbar-nav ms-auto">
            <a href="./login.php" class="nav-item nav-link">connexion</a>
            <a href="./inscription.php" class="nav-item nav-link">inscription</a>
        </div>
    </div>
</div>
</nav>


';
?>