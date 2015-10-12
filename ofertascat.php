<?php
include 'admin/conexao.php';
$class = new Funcoes();
$classCidade = new Funcoes();

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
                    if ($(document).scrollTop() > 600 && $(document).scrollTop() < ($('#footer').position().top - 500)) {
                       
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

    <body style="margin-top: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <?php //include 'conexaoFacebook.php'; ?>
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
            <div class="active item">
                <img class="slide-image" src="img1.png" alt="">
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                </div>
            </div>
            <div class="item">
                <img class="slide-image" src="img2.png" alt="">
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                </div>
            </div>
            <div class="item">
                <img class="slide-image" src="img3.png" alt="">
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
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
                   
                     <?php include 'promocaocategoria.php';?> 
                    
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>


</body>

</html>