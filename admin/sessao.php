<?php
session_start();
if($_SESSION['login_user']<> 1){
    header("location: login.php");
}
?>