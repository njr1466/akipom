<?php

include '../generated/include_dao.php';
try {
    $transaction = new Transaction();

    $oferta = DAOFactory::getOfertasDAO()->load($_GET['codigo']);
    if($oferta->principal == 1){
       $oferta->principal = 0; 
    }else{
        $oferta->principal = 1;
    }
    DAOFactory::getOfertasDAO()->update($oferta);
    $transaction->commit();
   
} catch (Exception $exc) {
   
    echo $exc;
}
?>
