<?php
include 'admin/conexao.php';
$class = new Funcoes();
$classCidade = new Funcoes();

if (isset($_GET['oferta'])) {
    $codigooferta = $_GET['oferta'];
    $resultado = $class->consultarOferta($codigooferta);


    while ($row = mysqli_fetch_assoc($resultado)) {
        $id_cliente = $row['id_cliente'];
        $valorantigo = (float) $row['valorantigo'];
        $valor = (float) $row['valor'];
        $desconto = $row['desconto'];
        $qtd = $row['qtd'];
        $descricao = $row['descricao'];
        $promocao = $row['promocao'];
        $date = new DateTime($row['datainicial']);
        $datainicial = $date->format('d.m.Y');
        $date = new DateTime($row['datafinal']);
        $datafinal = $date->format('d.m.Y');
        $principal = $row['principal'];
        $ativo = $row['ativo'];
        $imagem1 = $row['foto1'];
        $imagem2 = $row['foto2'];
        $imagem3 = $row['foto3'];
        $mapa = $row['mapa'];
    }
}
?>
<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements
        and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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
    </head>

    <body style="margin-top: 0px;background-color: #ffffff">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
              rel="stylesheet">
<?php //include 'conexaoFacebook.php';  ?>
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

<?php include 'menucentral.php'; ?>
        <!-- Page Content -->
        <div class="section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="caption">
                            <h2><?php echo $promocao; ?></h2>
                            <p></p>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div id="carousel-example" data-interval="false" class="carousel slide"
                             data-ride="carousel">
                            <div class="carousel-inner">
<?php if (trim($imagem1) != "") { ?>
                                    <div class="item active">
                                        <img src="imagem/fotos/<?php echo $imagem1; ?>"
                                             style="width: 100%">
                                        <div class="carousel-caption">
                                            <h2>Title</h2>
                                            <p>Description</p>
                                        </div>
                                    </div>
<?php }; ?>
<?php if (trim($imagem2) != "") { ?>
                                    <div class="item">
                                        <img src="imagem/fotos/<?php echo $imagem2; ?>"
                                             style="width: 100%">
                                        <div class="carousel-caption">
                                            <h2>Title</h2>
                                            <p>Description</p>
                                        </div>
                                    </div>
<?php }; ?>
<?php if (trim($imagem3) != "") { ?>
                                    <div class="item">
                                        <img src="imagem/fotos/<?php echo $imagem3; ?>"
                                             style="width: 100%">
                                        <div class="carousel-caption">
                                            <h2>Title</h2>
                                            <p>Description</p>
                                        </div>
                                    </div>
<?php }; ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5" style="bottom: 10px">
                        <p></p>
                        <div class="row" style="margin-left: 0px; margin-right: 0px">
                            <div class="col-xs-6" style="background-color: #E9E9E9">
                                <p style="color: #787878;text-align:center;font-size: 13px;height:30px ;padding-top: 20px;">R$ <strike><?php echo number_format($valorantigo, 2, ',', '.'); ?></strike></p>
                                <p style="color: #787878;text-align:center;font-size: 25px;font-weight: bold; ">R$ <?php echo number_format($valor, 2, ',', '.'); ?></p>
                            </div>
                            <div class="col-xs-6" style="background-color: #E2E2E2">
                                <p style="color: #787878;text-align:center;font-size: 13px;height: 30px ;padding-top: 20px;">Cupons restantes</p>
                                <p style="color: #787878;text-align:center; font-size: 25px;font-weight: bold;">20</p>
                            </div>
                            <div class="col-xs-6" style="background-color: #E2E2E2;">
                                <p style="color: #787878;text-align:center;font-size: 13px;height: 30px ;padding-top: 20px;">Desconto de</p>
                                <p style="color: #787878; text-align: center; font-size: 25px; font-weight: bold;"><?php echo $desconto; ?>%</p>
                            </div>
                            <div class="col-xs-6" style="background-color: #E9E9E9;">
                                <p style="color: #787878;text-align:center;font-size: 13px;height: 30px ;padding-top: 20px;">Encerra-se em:</p>
                                <p style="color: #787878;text-align:center; font-size: 25px;font-weight: bold;">2 dias</p>
                            </div>
                        </div>
                        <p></p>
                        <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                            <h4>
                                <p style="text-align: center;font-size: 15px;">Validade até <?php echo $datafinal ?></p>
                            </h4>
                        </div>
                        <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                            <div class="ratings col-xs-6" style="text-align: center">
                                <a href="inserirCupom.php?oferta=<?php echo $_GET['oferta']; ?>"><button type="button" class="btn btn-primary" style="width:100%">GERAR CUPOM</button></a>
                            </div>
                            <div class="ratings col-xs-6" style="text-align: center">
                                <button type="button" class="btn btn-primary" style="width:100%">ENVIAR POR EMAIL</button>
                            </div>
                        </div>
                        <p></p>
                        <p>
                            <br>
                        </p>
                        <h4>
                            <p style="text-align: left;font-size: 15px;">Imprima o cupom ou envie para seu email.</p>
                            <p style="text-align: left;font-size: 15px;">Vá até o estabelecimento cadastrado.</p>
                            <p style="text-align: left	;font-size: 15px;">Apresente o cupom no smartphone ou impresso.</p>
                        </h4>
                        <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                            <div class="ratings" style="text-align: center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" >

            <div class="container">
                <hr>
                <div class="col-md-7">

<?php echo $descricao; ?>  


                </div>
                <h4>USE SEU CUPOM DIRETO DO SMARTPHONE</h4>
                <h4>REGULAMENTO</h4>
 
                <br>
                <h4>MAPA</h4>
                <hr>
                <div class="col-md-5"><img class="img-responsive img-thumbnail" src="http://maps.googleapis.com/maps/api/staticmap?center=Tombouctou,Mali&amp;zoom=12&amp;size=400x300&amp;sensor=false"></div></div>
        </div>

        <div class="container">
            <hr>
            <div class="row"> 
                <div class="col-md-9">
                    <div class="row">
                        <div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>
    </body>

</html>