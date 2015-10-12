<?php
 
    error_reporting(E_ALL);
    require_once ('GChartPhp/gChart.php');
 
    $lobj_qrCode = new gQRCode(350,350);
    $lobj_qrCode->setQRCode( 'caralho vai tomar no cu' );
    echo "<img src=\"".$lobj_qrCode->getUrl()."\" />";
 
?> 