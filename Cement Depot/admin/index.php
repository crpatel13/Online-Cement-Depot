<?php
session_start();
if(isset($_SESSION['username'])){
    redirect("admin_home.php");
}else{
    redirect("admin_login.php");
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

?>