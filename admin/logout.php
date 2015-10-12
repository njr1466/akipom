<?php
session_start();
session_destroy(); // Destroying All Sessions
$_SESSION['login_user']=0;
header("Location: login.php"); // Redirecting To Home Page
?>

