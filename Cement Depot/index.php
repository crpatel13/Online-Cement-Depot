<?php
session_start();
if(isset($_SESSION['Id'])){
    redirect("home.php");
}else{
    redirect("login.php");
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

?>