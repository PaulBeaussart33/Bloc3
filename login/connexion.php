<?php
session_start();
require_once 'config.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->query("SELECT username, email, password FROM user WHERE email = '$email'");
    $data = $check->fetch();
    $row = $check->rowCount();
 
    if($row == 1){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $password = hash('sha256', $password);
            if($data['password'] === $password) {
                //echo "kefzhchsgcsdgchjgshgdsjhcsd";
                $_SESSION['user'] = $data['username'];
                header('Location:landing.php');

            }else header('Location:login.php?login_err=password');
        }else header('Location:login.php?login_err=email');
    }else header('Location:login.php?login_err=already');
}else header('Location: login.php');

