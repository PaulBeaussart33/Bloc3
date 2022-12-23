<?php
require_once 'config.php'; // On inclut la connexion à la base de données

 // Si les variables existent et qu'elles ne sont pas vides
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    // On vérifie si l'utilisateur existe
    $check = $bdd->prepare('SELECT username, email, password FROM user WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents
    

    // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
    if($row == 0){

        if(strlen($username) <= 100){ // On verifie que la longueur du pseudo <= 100

            if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                    if($password == $password_retype){ // si les deux mdp saisis sont bon
                        // On hash le mot de passe,
                        $password = hash('sha256', $password);
                        // On stock l'adresse IP
                        $ip = $_SERVER['REMOTE_ADDR'];

                        // On insère dans la base de données
                        $insert = $bdd->prepare("INSERT INTO user(username, email, password, ip) VALUES('$username', '$email', '$password', '$ip')");
                        $insert->execute();
                        // On redirige avec le message de succès
                        header('Location:inscription.php?reg_err=success'); die();

                    }else {header('Location: inscription.php?reg_err=password'); die();}

                }else{ header('Location: inscription.php?reg_err=email'); die();}

            }else{ header('Location: inscription.php?reg_err=email_length'); die();}

        }else{ header('Location: inscription.php?reg_err=username_length'); die();}

    }else{ header('Location: inscription.php?reg_err=already'); die();}

    
}