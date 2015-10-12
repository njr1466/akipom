<?php
include 'admin/conexao.php';
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
                  if($(document).scrollTop() >600 && $(document).scrollTop() <1670){  
                    $("#menu").animate({
                        top:  ($(document).scrollTop()-600) + "px"
                    }, {duration: 500, queue: false}
                    );
                  }
                  
                   if($(document).scrollTop() < 600 ){  
                    $("#menu").animate({
                        top:  (0) + "px"
                    }, {duration: 500, queue: false}
                    );
                  }
                  
                });
            });
        </script>

    </head>

    <body style="margin-top: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <?php include 'topo.php';?>
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
    <nav class="hidden-sm hidden-xs navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                <ul class="nav navbar-nav">
                    <li class="dropdown thumb-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recife <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php
                            $resultado = $classCidade->listarCidade();
                            while ($rowcidade = mysqli_fetch_assoc($resultado)) {
                                $cidade = $rowcidade['nome'];
                                ?>
                                <li>
                                    <a href="#">
                                        <?php echo $cidade; ?>                               
                                    </a>
                                </li>                       
                            <?php }; ?>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right text-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar ofertas, etc...">
                    </div>
                    <button type="submit" class="btn btn-default">Pesquisar</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Page Content -->
    <div  class="container">
        <div class="row">
           <?php include 'menu.php';?>
            <div class="col-md-9" >
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4 >
                                    <a href="#" style="color: #885521">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>

                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>                 </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>                

                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>


                        </div>
                    </div>

                    <div> 
                        <img src="imagem/banner1.jpg" style="width: 875px" class="img-responsive">
                    </div>
                    <br>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>                
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
                        <div class="thumbnail" style="height: 450px;width: ">
                            <img src="https://img.peixeurbano.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000e5qXQMAY/5568b58ee4b04183a668d0a5.jpg&amp;w=458&amp;h=296"
                                 alt="" class="img-rounded">
                            <div class="caption">
                                <h4>
                                    <a href="#">Rodízio completo no almoço e jantar.</a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #e8b530">
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">R$ 39,90</p>
                                    <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">R$ 29,90</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #885521"> 
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Restam</p>
                                    <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                </div>

                                <div class="col-xs-6" style="background-color: #885521">
                                    <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                    <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #e8b530"> 
                                    <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Finaliza em </p>
                                    <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                    <button type="button" class="btn btn-primary" style="width:100%">PEGAR CUPOM GRÁTIS</button>
                                </div>
                                <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                    <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                                </div>


                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>


</body>

</html>