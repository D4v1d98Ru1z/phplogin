<?php

$query_conn = 'mysql:host=localhost;dbname=practice';
$user = 'root';
$pass = '1234';

try{
    $pdo = new PDO($query_conn,$user,$pass);
}
catch(PDOException $ex){
    print "ERROR: " .$ex->getMessage() . "<br>";
}