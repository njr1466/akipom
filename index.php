<?php
include 'admin/conexao.php';
include './generated/include_dao.php';
$class = new Funcoes();
$classCidade = new Funcoes();

session_start();
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
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
                    if ($(document).scrollTop() > 600 && $(document).scrollTop() < ($('#banner').position().top - 535)) {
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



            function carregarmais()
            {

                $('#comum').load("promocaocomum2.php?qtd=<?php echo $_SESSION['carregar'] + 1; ?>");
            }



        </script>
        
    </head>

    <body style="margin-top: 0px;padding-top: 0px;padding-bottom: .;padding-left: 0px;padding-right: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
    </div>
    <div id="carousel-example-generic" class="carousel hidden-sm hidden-xs slide"
         data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $array = DAOFactory::getBannersuperiorDAO()->queryAll();
            ?>   


            <div class="active item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[0]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[0]->texto1); ?></h2>
                    <p><?php echo ($array[0]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
            <div class=" item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[1]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[1]->texto1); ?></h2>
                    <p><?php echo ($array[1]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
            <div class=" item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[2]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[2]->texto1); ?></h2>
                    <p><?php echo ($array[2]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>

        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>

        </a>
    </div>
    <?php include 'menucentral.php'; ?>
    <!-- Page Content -->
    <div  class="container">
        <div class="row">
            <?php include 'menu.php'; ?>
            <div class="col-md-9" >
                <div class="row">
                    <?php include 'promocaoprincipal.php'; ?>

                    <?php
                    $array = DAOFactory::getBannercentralDAO()->queryAll();
                    $count = count($array);
                    $numerorandomico = mt_rand(0, $count - 1);
                    ?>
                    <div> <a href="<?php echo $array[$numerorandomico]->link; ?>">
                            <img class="hidden-sm hidden-xs" src="imagem/bannercentral/<?php echo $array[$numerorandomico]->imagem; ?>" style="width: 98%;border: thin solid;border-color:white" class="img-responsive hidden-md img-responsive">
                        </a>
                    </div>
                    <br>
                    <div id="comum" >
                        <?php include 'promocaocomum.php'; ?> 
                    </div>
                    <button class="btn btn-block btn-default" onclick="javascript:carregarmais()" style="width: 98%;text-align: center;font-size: 13px;cursor:hand"><strong><?php echo utf8_decode("Carregar Mais Ofertas"); ?></strong></button>


                </div>
            </div>
        </div>
        <br>
        <div class="row" id="banner">
            <!--?php include 'menu.php'; ?-->
            <div class="row" style="
                 margin-left: 0px;
                 margin-right: 0px;
                 ">

                <div class="row" style="
                     margin-left: 0px;
                     margin-right: 0px;
                     ">
                         <?php
                         $arrayinferior = DAOFactory::getBannerinferiorDAO()->queryAll();
                         $countinferior = count($arrayinferior);
                         $numerorandomico2 = mt_rand(0, $countinferior - 1);
                         ?>
                    <div>
                        <a href="<?php echo $arrayinferior[$numerorandomico2]->link; ?>">
                            <img class="hidden-sm hidden-xs" src="imagem/bannerinferior/<?php echo $arrayinferior[$numerorandomico2]->imagem; ?>" style="width: 1136px;padding-left: 0px;border: thin solid;border-color:white;margin-left: 16px;" class="img-responsive hidden-md img-responsive">
                        </a>
                    </div>
                    <br>
                    <!--?php include 'promocaoprincipal.php';?-->
                    <!--?php include 'promocaocomum.php';?-->
                </div>
            </div>
        </div>
        <div class="row" id="banner">
            <!--?php include 'menu.php'; ?-->
            <div class="col-md-12">
                <div class="row" style="margin-left: 0px;">
                    <?php include 'promocaofooter.php'; ?>
                </div>
            </div>

        </div>
    </div>
    <?php include 'footer.php'; ?>


</body>

</html>