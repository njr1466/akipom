<?php

include '../generated/include_dao.php';
try {
    $transaction = new Transaction();

    $oferta = DAOFactory::getOfertasDAO()->load($_GET['codigo']);
    $oferta->principal = $_GET['principal'];
    DAOFactory::getOfertasDAO()->update($oferta);
    $transaction->commit();
   
} catch (Exception $exc) {
   
    echo $exc;
}
?>
