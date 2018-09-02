<?php
//this is the connection of SQL data base
$query_conn = 'mysql:host=localhost;dbname=***tableName**';
$user = '***database user**';
$pass = '**password of the database**';

try{
    $pdo = new PDO($query_conn,$user,$pass);
}
catch(PDOException $ex){
    print "ERROR: " .$ex->getMessage() . "<br>";
}