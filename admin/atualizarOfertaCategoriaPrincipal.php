<?php

include '../generated/include_dao.php';
try {
    $transaction = new Transaction();

    $oferta = DAOFactory::getOfertasDAO()->load($_GET['codigo']);
    if($oferta->principalcategoria == 1){
       $oferta->principalcategoria = 0; 
    }else{
        $oferta->principalcategoria = 1;
    }
    DAOFactory::getOfertasDAO()->update($oferta);
    $transaction->commit();
   
} catch (Exception $exc) {
   
    echo $exc;
}
?>

