<?php
include 'admin/conexao.php';
$class = new Funcoes();
$classCidade = new Funcoes();
include './generated/include_dao.php'; 
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
        <title>Meus Cupons</title>
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
        <?php
        if (isset($_GET['msg'])) {
            ?>
            <script language="javascript">
                $(document).ready(function () {
                    $('#loginbox').hide();
                    $('#signupbox').show();
                });
            </script>

            <?php
        }
        ?>
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

        <script language="javascript">
            function verificaDuplicidade(valor) {
                url = "inserirUsuario.php?email=" + valor; // arquivo que pesquisa se o usuario existe
                div = "pesquisaUsuario"; // div com o id "pesquisaUsuario". você pode colocar qualquer nome

                ajax(url, div);

                alert(document.getElementById(div).innerHTML);

            }

            function ajax(url, div) {
                req = null;
                if (window.XMLHttpRequest) {
                    req = new XMLHttpRequest();
                    req.onreadystatechange = processReqChange;
                    req.open("GET", url, true);
                    req.send(null);
                } else if (window.ActiveXObject) {
                    req = new ActiveXObject("Microsoft.XMLHTTP");
                    if (req) {
                        req.onreadystatechange = processReqChange;
                        req.open("GET", url, true);
                        req.send(null);
                    }
                }
            }

            function processReqChange() {
                if (req.readyState == 4) {
                    if (req.status == 200) {
                        document.getElementById(div).innerHTML = req.responseText;
                    } else {
                        alert("Houve um problema ao obter os dados:n" + req.statusText);
                    }
                }
            }
        </script>

        <style>
            
            @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    body {
		padding: 60px 0px;
		background-color: rgb(220, 220, 220);
	}
    
    .event-list {
		list-style: none;
		font-family: 'Lato', sans-serif;
		margin: 0px;
		padding: 0px;
	}
	.event-list > li {
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 0px 5px rgb(51, 51, 51);
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
		padding: 0px;
		margin: 0px 0px 20px;
	}
	.event-list > li > time {
		display: inline-block;
		width: 100%;
		color: #737373;
		background-color: #ddd;
		padding: 5px;
		text-align: center;
		text-transform: uppercase;
	}
	.event-list > li:nth-child(even) > time {
		background-color: #BBB;
	}
	.event-list > li > time > span {
		display: none;
	}
	.event-list > li > time > .day {
		display: block;
		font-size: 56pt;
		font-weight: 100;
		line-height: 1;
	}
	.event-list > li time > .month {
		display: block;
		font-size: 24pt;
		font-weight: 900;
		line-height: 1;
	}
        .event-list > li time > .texto {
		display: block;
		font-size: 11pt;
		font-weight: 900;
		line-height: 1;
	}
	.event-list > li > img {
		width: 100%;
	}
	.event-list > li > .info {
		padding-top: 5px;
		text-align: center;
	}
	.event-list > li > .info > .title {
		font-size: 17pt;
		font-weight: 700;
		margin: 0px;
	}
	.event-list > li > .info > .desc {
		font-size: 13pt;
		font-weight: 300;
		margin: 0px;
	}
	.event-list > li > .info > ul,
	.event-list > li > .social > ul {
		display: table;
		list-style: none;
		margin: 10px 0px 0px;
		padding: 0px;
		width: 100%;
		text-align: center;
	}
	.event-list > li > .social > ul {
		margin: 0px;
	}
	.event-list > li > .info > ul > li,
	.event-list > li > .social > ul > li {
		display: table-cell;
		cursor: pointer;
		color: rgb(30, 30, 30);
		font-size: 11pt;
		font-weight: 300;
        padding: 3px 0px;
	}
    .event-list > li > .info > ul > li > a {
		display: block;
		width: 100%;
		color: rgb(30, 30, 30);
		text-decoration: none;
	} 
    .event-list > li > .social > ul > li {    
        padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
        padding: 3px 0px;
	} 
	.event-list > li > .info > ul > li:hover,
	.event-list > li > .social > ul > li:hover {
		color: rgb(30, 30, 30);
		background-color: rgb(200, 200, 200);
	}
	.facebook a,
	.twitter a,
	.google-plus a {
		display: block;
		width: 100%;
		color: rgb(75, 110, 168) !important;
	}
	.twitter a {
		color: rgb(79, 213, 248) !important;
	}
	.google-plus a {
		color: rgb(221, 75, 57) !important;
	}
	.facebook:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(75, 110, 168) !important;
	}
	.twitter:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(79, 213, 248) !important;
	}
	.google-plus:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(221, 75, 57) !important;
	}

	@media (min-width: 768px) {
		.event-list > li {
			position: relative;
			display: block;
			width: 100%;
			height: 120px;
			padding: 0px;
		}
		.event-list > li > time,
		.event-list > li > img  {
			display: inline-block;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			float: left;
		}
		.event-list > li > .info {
			background-color: rgb(245, 245, 245);
			overflow: hidden;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			height: 120px;
			padding: 0px;
			margin: 0px;
		}
		.event-list > li > .info {
			position: relative;
			height: 120px;
			text-align: left;
			padding-right: 40px;
		}	
		.event-list > li > .info > .title, 
		.event-list > li > .info > .desc {
			padding: 0px 10px;
		}
		.event-list > li > .info > ul {
			position: absolute;
			left: 0px;
			bottom: 0px;
		}
		.event-list > li > .social {
			position: absolute;
			top: 0px;
			right: 0px;
			display: block;
			width: 40px;
		}
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
		.event-list > li > .social > ul > li {			
			display: block;
            padding: 0px;
		}
		.event-list > li > .social > ul > li > a {
			display: block;
			width: 40px;
			padding: 10px 0px 9px;
		}
	}
        </style>

    </head>

    <body style="margin-top: 0px;padding-top: 0px;">
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

        <br>
<div class="container">
		<div class="row">
			<div>
				<ul class="event-list">
					
                                    <?php 
       $codigoUsuario = DAOFactory::getUsuariosDAO()->queryByEmail($_SESSION['EMAIL']) ;                            
       $array = DAOFactory::getCuponsDAO()->queryByIdCliente($codigoUsuario[0]->id); 
      
      $count = count($array);
      for($i =0 ; $i < $count;$i++){
                                $oferta = DAOFactory::getOfertasDAO()->load($array[$i]->idOferta);
                                $date = new DateTime($oferta->datafinal);
                                $dia = $date->format('d');
                                $mes = $date->format('m');
                                $ano = $date->format('Y');
                                $empresa = DAOFactory::getEmpresasDAO()->load($oferta->idCliente);
                                    ?>
                                    
                                    
                                    

					<li>
						<time datetime="2014-07-20 0000">
                                                    <span class="texto">Usar Ate</span>
							<span class="day"><?php echo $dia;?></span>
							<span class="month"><?php echo $mes;?></span>
							<span class="year"><?php echo $ano;?></span>
							<span class="time">12:00 AM</span>
						</time>
                                            <img alt="My 24th Birthday!" src="imagem/fotos/<?php echo $oferta->foto1;?>" />
						<div class="info">
							<h2 class="title"><?php echo $oferta->promocao;?></h2>
							<p class="desc"><?php echo $empresa->empresa;?></p>
							<ul>
								<li style="width:50%;"><a href=""><span class="fa fa-globe"></span> BAIXE SEU CUPOM</a></li>
								<li style="width:50%;"><span class="fa fa-money"></span> R$ <?php echo number_format($oferta->valor, 2, '.', ',');?></li>
							</ul>
						</div>
						
					</li>

       <?php } ?>
				</ul>
			</div>
		</div>
	</div>
     
        <?php include 'footer.php'; ?>

    </body>

</html>
