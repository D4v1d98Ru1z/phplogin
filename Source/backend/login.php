<?php
session_start();
include_once 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$compareEmail = 'SELECT * FROM user WHERE email = ?';
$sentence = $pdo->prepare($compareEmail);
$sentence->execute(array($email));
$end = $sentence->fetch();

if(!end){
    echo 'User not register';
    die();
}

if(password_verify($password, $end['password'])){
    $_SESSION['admin'] = $email;  
    header('Location:../frontend/panel.php');
}
else{
    echo 'Something is wrong with your password, try again';
    die();
}
