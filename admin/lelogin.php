<?php
include 'conexao.php';
$class = new Funcoes();
session_start();

if (empty($_POST['login']) || empty($_POST['senha'])) {
    $error = "Username or Password is invalid";
    echo $error;
    header("location: login.php");
} else {
    if ($class->efetuarLogin($_POST['login'], $_POST['senha'])) {
        $_SESSION['login_user'] = 1;
        header("location: admin.php");
    }else{
        
        header("location: login.php?acao=erro"); 
    }
}
?>

