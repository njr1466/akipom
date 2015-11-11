<?php
session_start();

   if ($_SESSION['logado']!=1) {
     echo "<meta http-equiv='refresh' content=1;url='login.php'>";  
   }else{ 

include 'admin/conexao.php';
$class = new Funcoes();
$classCidade = new Funcoes();
include './generated/include_dao.php';

function UrlAtual() {
    $dominio = $_SERVER['HTTP_HOST'];
    $url = "http://" . $dominio . $_SERVER['REQUEST_URI'];
    return $url;
}

$_SESSION['url'] = UrlAtual();


try {

    $transaction = new Transaction();
    $cupom = new Cupon();
    $cupom->idOferta = $_GET['oferta'];
    $usuario = DAOFactory::getUsuariosDAO()->queryByEmail($_SESSION['EMAIL']);
    $cupom->idCliente = $usuario[0]->id;
    $date = date_create();
    $numero = date_timestamp_get($date);
    $numeroinvertido = strrev($numero);
    $numero = $cupom->idCliente . $numeroinvertido;
    $cupom->numero = substr($numero, 0, 9);
    $cupom->data = date("Y-m-d");
    // echo $cupom->data . $cupom->id . $cupom->idCliente . $cupom->idOferta . $cupom->numero;
    $cupomid = DAOFactory::getCuponsDAO()->insert($cupom);
    $transaction->commit();

    $cupomgerado = DAOFactory::getCuponsDAO()->load($cupomid);
    $oferta = DAOFactory::getOfertasDAO()->load($cupomgerado->idOferta);
    $empresa = DAOFactory::getEmpresasDAO()->load($oferta->idCliente);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

   
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Akipom</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/full-width-pics.css" rel="stylesheet">
        <script src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>

        <script language="javascript">
            $(document).ready(function () {
                var y_fixo = $("#menu").offset().top;
                $(window).scroll(function () {
                    if ($(document).scrollTop() > 600 && $(document).scrollTop() < 1670) {
                        $("#menu").animate({
                            top: ($(document).scrollTop() - 600) + "px"
                        }, {duration: 500, queue: false}
                        );
                    }

                    if ($(document).scrollTop() < 600) {
                        $("#menu").animate({
                            top: (0) + "px"
                        }, {duration: 500, queue: false}
                        );
                    }

                });
            });
        </script>
        <script>
            function cont() {
                var conteudo = document.getElementById('impressao').innerHTML;
                tela_impressao = window.open('about:blank');
                tela_impressao.document.write(conteudo);
                tela_impressao.window.print();
                tela_impressao.window.close();
            }
        </script>





        <style>

            .box {
                background:#fff;
                transition:all 0.2s ease;
                border:2px dashed #dadada;
                margin-top: 10px;
                box-sizing: border-box;
                border-radius: 5px;
                background-clip: padding-box;
                padding:0 20px 20px 20px;
                min-height:340px;
            }

            .box:hover {
                border:2px solid #525C7A;
            }

            .box span.box-title {
                color: #fff;
                font-size: 24px;
                font-weight: 300;
                text-transform: uppercase;
            }

            .box .box-content {
                padding: 16px;
                border-radius: 0 0 2px 2px;
                background-clip: padding-box;
                box-sizing: border-box;
            }
            .box .box-content p {
                color:#515c66;
                text-transform:none;
            }

        </style>

    </head>

    <body style="margin-top: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <?php include 'topo.php'; ?>

        <div style="background-image: url(imagem/Header2.png); height: 220px; width: 100%"
             class="hidden-sm hidden-xs">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
        <div class="section">

            <div class="container">
                <div class="row">

                    <div class="row" >

                        <div class="box">
                            <div class="box-content" id="impressao">

                                <div class="section">
                                    <div class="container">
                                        <table style=" width: 1070px;">
                                            <tr>
                                                <td style="padding: 2px"><button type="button" class="btn btn-primary right" onclick="cont();" style="width: 176px;float: right;height: 44px;">IMPRIMIR CUPOM</button></td>
                                                <td><button type="button" class="btn btn-primary right" style="width: 176px;float: left;height: 44px;">IMPRIMIR CUPOM</button> </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <br><br>
                                    <div class="section">
                                        <div class="container">
                                            <div class="row" style=" width: 1070px;">
                                                <table style=" width: 1070px;">
                                                    <tr>
                                                        <td class="text-center" > <p style="font-size: 18px;"><strong><?php echo utf8_decode("Parabéns! seu Cupom foi Gerado com Sucesso! APROVEITE!"); ?> </strong></p></td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="section">
                                        <div class="container">

                                            <table style=" width: 1070px;">
                                                <tr>
                                                    <td style="padding: 2px"> <img src="imagem/LOGO.png" class="img-responsive" style="float:right;"></td>
                                                    <td><img src="imagem/LOGO.png" class="img-responsive" style="float:left;"> </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="section">
                                        <div class="container">
                                            <div class="row" style=" width: 800px;margin-left: 200px;padding-left: 0px;">


                                                <table>
                                                    <tr>  <img src="imagem/fotos/<?php echo $oferta->foto1; ?>" class="img-responsive" style="float:left;width: 40%;margin-right: 20px;">


                                                    </tr>

                                                    <tr>

                                                    <table> 
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Código</td>
                                                            <td><?php echo $cupomgerado->numero; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parceiro</td>
                                                            <td><?php echo $empresa->id; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Validade</td>
                                                            <td><?php echo $oferta->datafinal; ?></td>
                                                        </tr>
                                                        </tr>     
                                                    </table>
                                                    </tr>

                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="section">
                                        <div class="container">
                                            <table style=" width: 600px;margin-left: 200px;font-size: 18px;">
                                                <tr>
                                                    <td>
                                                        <?php echo $oferta->descricao; ?>     
                                                    </td>
                                                </tr>

                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>           
                </div>
            </div>
        </div>
        <br>





        <?php include 'footer.php'; ?>

    </body>

</html>

   <?php };?>