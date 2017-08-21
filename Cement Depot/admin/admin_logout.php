<?php
session_start();
session_destroy();

redirect("admin_login.php");
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
?>