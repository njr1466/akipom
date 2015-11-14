<?php
include './generated/include_dao.php'; 
if(isset($_POST['email'])){ 

//    #Recebe o Email Postado
//    $emailPostado = $_POST['email'];
//    $usuario = DAOFactory::getUsuariosDAO()->queryByEmail($emailPostado);
//
//   $cont= count($usuario);
//
//    #Se o retorno for maior do que zero, diz que já existe um.
//    if($cont >0) 
//        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
//    else 
//        echo json_encode(array('email' => 'Usuário valido.' )); 
    
    echo json_encode($_POST['email']);
}else{
     echo json_encode("invalido");
}
?>
?>