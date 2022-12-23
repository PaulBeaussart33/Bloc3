<?php
include './layouts.php';
session_start();// Démarrage de la session

// si la session existe pas, ou pas connecté, on redirige
if(!isset($_SESSION['user']))
header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
    <title>Compte</title>
</head>
<body>
    <div class="content">
    <h1 class="gestionTitle">Bienvenue sur votre page personnel <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
    </div>
</body>
</html>