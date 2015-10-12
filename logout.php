<?php
session_start();
session_unset();
    $_SESSION['UID'] = NULL;
    $_SESSION['NAME'] = NULL;
    $_SESSION['logado'] =  NULL;
    $_SESSION['URL'] =  NULL;
    header("Location: index.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>

