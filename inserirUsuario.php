<?php

include './generated/include_dao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['signupform'])) {


        try {
            $transaction = new Transaction();

            $usuario = new Usuario();
            $usuario->nome = $_POST['nome'];
            $usuario->sobrenome = $_POST['sobrenome'];
            $usuario->email = $_POST['email'];
            $usuario->senha = md5($_POST['senha']);
            $usuario->ativo = 1;
            $resultado = DAOFactory::getUsuariosDAO()->insert($usuario);
            $transaction->commit();
            header('location: usuariocadastradosucesso.php');
        } catch (Exception $exc) {
            header('location: login.php?msg=error');
        }
    }
}
?>