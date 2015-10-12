

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
            <div class="alert alert-success">

                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn-primary right" style="width: 60%;">IMPRIMIR CUPOM</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary right" style="width: 60%;">INDICAR AO AMIGO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 tex"><strong><?php echo utf8_decode("Parabéns! seu Cupom foi Gerado com Sucesso! APROVEITE!"); ?></strong></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="imagem/LOGO.png" class="img-responsive">

                        <p></p>

                        <p></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">

                        <p></p>

                        <p></p>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <img src="<?php echo $resultadoOferta->; ?>"
                                     class="img-responsive">
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
<?php echo utf8_decode("CUPOM " . $cupom); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                    dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                    felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus
                                    in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                                    laoreet.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>   












<?php include 'footer.php'; ?>

    </body>

</html>