<?php
require_once 'sessao.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


        <title>Área Administrativa AKIPOM</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        <style>
            .hero-widget { text-align: center; padding-top: 20px; padding-bottom: 20px; }
            .hero-widget .icon { display: block; font-size: 96px; line-height: 96px; margin-bottom: 10px; text-align: center; }
            .hero-widget var { display: block; height: 64px; font-size: 64px; line-height: 64px; font-style: normal; }
            .hero-widget label { font-size: 17px; }
            .hero-widget .options { margin-top: 10px; }

        </style>
    </head>
    <body>
        <!-- header -->
        <?php include 'header.php'; ?>
        <!-- /Header -->

        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <?php include "menu.php"; ?>

                <!-- /col-3 -->
                <div class="col-sm-9">

                    <!-- column 2 -->
                    
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
                    <hr>

                    <div class="row">
                        <!-- center left-->

                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                 <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <var>3</var>
                                    <label class="text-muted">Usuarios</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <var>3</var>
                                    <label class="text-muted">Ofertas</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <var>3</var>
                                    <label class="text-muted">Cupons Baixados</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <var>3</var>
                                    <label class="text-muted">Cupons Usados</label>
                                </div>

                            </div>
                        </div>





                        <!--/panel-->


                        <!--/tabs-->


                    </div>
                    <!--/col-->


                    <!--/panel-->


                    <!--/panel-->

                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->

            <hr>

            
        </div>
        <!--/col-span-9-->

<!-- /Main -->

<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a></footer>

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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>