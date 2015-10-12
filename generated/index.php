
<?php
include './include_dao.php';

$transaction = new Transaction();

$bairro = new Bairro();
$bairro->idCidade= 1;
$bairro->bairro = "Maranguape 1";
DAOFactory::getBairrosDAO()->insert($bairro);
$transaction->commit();
?>