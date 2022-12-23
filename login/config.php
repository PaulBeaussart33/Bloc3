<?php
try
{   // connexion a la bdd avec PDO ( une extension orientée objet définissant l'interface pour accéder à une base de données avec PHP. )
    $bdd = new PDO('mysql:host=localhost;dbname=pizzatower;charset=utf8', 'root', '');
}catch(Exception $e) {
    die('Erreur'.$e->getMessage());
}