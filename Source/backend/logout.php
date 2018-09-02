<?php
session_start();
//delete the content from array
$_SESSION = array();

//logout without destroy the data.Just delete de cookies
if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'], $params['secure'],
        $params['httponly']
    );
}

session_destroy();
header('Location:../frontend/index.php');