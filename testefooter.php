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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="margin-top: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <div style="background-image: url(imagem/cabecalhopequeno.png); height: 20px; width: 100%"
             class="hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="container" style="text-align: right; color: #ffffff;font-family: arial"> 
                             
                        </div> 
                        <div class="container" style="text-align: right; color: #ffffff;font-family: arial">
                            <img class="slide-image" src="imagem/icon - anuncie.png" alt="" >
                            ANUNCIE
                            COMPARTILHE : 
                            <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                            <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url(imagem/Header2.png); height: 220px; width: 100%"
             class="hidden-sm hidden-xs">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2" style="color: #ffffff" style="color: #ffffff; font-family: arial">Já sou cadastrado.</div>
                    <div class="col-xs-2 hidden-sm hidden-xs" style="color: #ffffff; color: #ffffff; font-family: arial">Não sou cadastrado.</div>
                </div>
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2" style="color: #ffffff; font-family: arial"><img class="slide-image" src="imagem/Cupom icon.png" alt="" >     Meus Cupons</div>
                    <div class="col-xs-2">
                        <div class="ratings">
                            <a href="login.php" class="btn btn-primary btn-block">Entrar</a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="ratings">
                            <a href="http://bootsnipp.com/snippets/featured/stylish-button-list" class="btn btn-danger btn-block">Cadastre-se</a>
                        </div>
                    </div>
                </div>
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
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <a href="#"><img src="Tittle-Categoria.png" class="img-responsive img-thumbnail"></a>
                    <div class="list-group">
                        <?php
                        $result = $class->listarCategoria();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $categoria = $row['nome'];
                            ?>
                            <a href="#" class="list-group-item"><?php echo $categoria; ?><span class="badge">42</span></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-9" >
                    <div class="row">
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary" >PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary" >PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
                                        </div>
                                    </div>
                                 <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                    <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                                    </div>
                               

                            </div>
                        </div><div class="col-sm-4 col-lg-4 col-md-4" style="position: relative;  min-height: 1px;  padding-right: 0px; padding-left: 0px;">
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary" >PEGAR CUPOM GRÁTIS</a>
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
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">De: R$ 39,90</p>
                                            <p style="color: #885521;text-align:center;font-size: 16px;font-weight: bold; ">por: R$ 29,90</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #885521"> 
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Cupons restantes</p>
                                            <p style="color: #e8b530;text-align:center; font-size: 16px;font-weight: bold;">20</p>
                                        </div>

                                        <div class="col-xs-6" style="background-color: #885521">
                                            <p style="color: #e8b530;text-align:center;font-size: 11px;height: 10px ;">Desconto de</p>
                                            <p style="color: #e8b530;text-align:center;font-size: 18px;font-weight: bold;">25%</p>
                                        </div>
                                        <div class="col-xs-6" style="background-color: #e8b530"> 
                                            <p style="color: #885521;text-align:center;font-size: 11px;height: 10px ;">Encerra-se em:</p>
                                            <p style="color: #885521;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                        </div>

                                    </div>
                                <p>
                                   <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                       <div class="ratings" style="text-align: center">
                                           <a href="#" style="width: 281.22222042083746px;" class="btn btn-block btn-lg btn-primary">PEGAR CUPOM GRÁTIS</a>
                                        </div>
                                    </div>
                                 <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                    <p style="text-align: center;font-size: 11px;">Validade até 01/08/2015</p>
                                    </div>
                               

                            </div>
                        </div>





                    </div>
                </div>
            </div>
            <footer class="section section-warning" style="background-color: #885521">
      <div class="container" style="background-color: #885521">
        <div class="row">
          <div class="col-sm-6">
            <h1>Footer header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
            <!-- /.container -->
            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
    </body>

</html>