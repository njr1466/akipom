<?php
include 'sessao.php';
require_once 'conexao.php';
$class = new Funcoes();
?>	

<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


        <title>Área Administrativa AKIPOM</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="editor.js"></script>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="editor.css" type="text/css" rel="stylesheet"/>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#txtEditor").Editor();
            });

            function confirmacao() {
                $(function () {
                    var valorDaDiv = $(".Editor-editor").html();
                    $("#desc").val(valorDaDiv);
                });
            }
        </script>
    </head>

    <body>
        <!-- header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /Header -->
        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <?php include "menu.php"; ?>
                <!-- /col-3 -->
                <div class="col-sm-9">
                    <!-- column 2 -->
                    <a href="#"></a>
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-12">
                            <!--tabs-->
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="panel-group" id="accordion">
                                            <form  id="formoferta" enctype="multipart/form-data" action="leBannerCentral.php" method="post">
                                                <div class="panel panel-default">
                                                    <input name="action" type="hidden" value="add">
                                                    <input name="desc" id="desc" type="hidden" >
                                                    <div class="panel-heading">
                                                        <div class="btn-group btn-group-justified">
                                                            <a href="addBannerCentral.php" class="btn btn-primary col-sm-3">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                                <br> Adicionar
                                                            </a>

                                                            <a href="bannercentral.php" class="btn btn-primary col-sm-3">
                                                                <i class="glyphicon glyphicon-th-list"></i>
                                                                <br> Listar
                                                            </a>

                                                        </div>
                                                        <h4 class="panel-title"></h4>
                                                    </div>
                                                    <fieldset>


                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label" for="datainicial">Data Inicial</label>  
                                                            <div class="col-md-8">
                                                                <input id="datainicial" name="datainicial" type="text" placeholder="Digite a data inicial da oferta" class="form-control input-md" required="">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label" for="datafinal">Data Final</label>  
                                                            <div class="col-md-8">
                                                                <input id="datafinal" name="datafinal" type="text" placeholder="Digite a data final da oferta" class="form-control input-md" required="">

                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label" for="link">Link</label>  
                                                            <div class="col-md-8">
                                                                <input id="link" name="link" type="text" placeholder="Digite a url do banner" class="form-control input-md" required="">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <!-- File Button --> 
                                                        <div class="form-group">

                                                        </div>

                                                        <!-- File Button --> 
                                                        <div class="form-group">
                                                            <label class="col-md-12 control-label" for="imagem1">Imagem Principal</label>
                                                            <div class="col-md-12">
                                                                <input id="imagem1" name="imagem1" class="input-file" type="file">
                                                            </div>





                                                           <label class="col-md-8 control-label" for="imagem3"></label>
                                                            <button type="submit" class="btn btn-success btn-sm" >
                                                                <span class="glyphicon glyphicon-floppy-disk text-right" ></span>  Salvar  </button>
                                                        </div>

                                                        <!-- File Button --> 
                                                        <div class="form-group">

                                                        </div>

                                                        <div class="form-group">

                                                        </div>

                                                    </fieldset>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--/tabs-->
                        </div>
                        <!--/col-->
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->

        <div class="modal" id="addWidgetModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Widget</h4>
                    </div>
                    <div class="modal-body">
                        <p>Add a widget stuff here..</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dalog -->
        </div>
        <!-- /.modal -->
        <!-- script references -->

    </body>

</html>