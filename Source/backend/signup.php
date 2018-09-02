<?php
include_once 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirmPassword'];

$cryptPss = password_hash($password, PASSWORD_DEFAULT);

$compareEmail = 'SELECT * FROM user WHERE email = ?';
$sentence = $pdo->prepare($compareEmail);
$sentence->execute(array($email));
$end = $sentence->fetch();

if($end){ //if end is true
    echo 'Email already signed up!';
    die();
}

if(password_verify($confirm, $cryptPss)){
    $add_query = 'INSERT INTO user (email, password) VALUES (?,?)';
    $addPDO = $pdo->prepare($add_query);
    $addPDO->execute(array($email, $cryptPss));

    $addPDO = null;
    $pdo = null;
    header('Location:../frontend/index.php');
}
else{
    echo 'Hey the passwords does´nt match';
}