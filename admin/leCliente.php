<?php
session_start();
require_once 'conexao.php';
$class = new Funcoes();

if(isset($_GET['acao'])){
$id=$_GET['codigo'];
echo $class->excluirClientes($id);
echo"<meta http-equiv='refresh' content=3;url='login.php'>";
}else
{
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$action = $_POST['action'];

if($action=="add"){
$class->inserirClientes($nome,$sobrenome,$email,$senha);
//echo"<meta http-equiv='refresh' content=3;url='../login.php'>";
}

if($action=="edit"){
$id = $_POST['id'];
echo $class->alterarClientes($id,$nome,$sobrenome,$email,$senha);
echo"<meta http-equiv='refresh' content=3;url='cidade.php'>";
}

if(isset($_GET['acao'])){
echo $class->excluirClientes($id);
echo"<meta http-equiv='refresh' content=3;url='cidade.php'>";
}

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
        <?php include '../topo.php';?>
      
        <div style="background-image: url(../imagem/Header2.png); height: 220px; width: 100%"
             class="hidden-sm hidden-xs">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
   
   
   
<div class="container">
    <br>         
  <div class="well"><?php
							
							if($action=="add"){
								echo"Usuario cadastrado com sucesso";
							}
							if($action=="edit"){
								echo"Registro atualizado com sucesso";
														}
							?>
                               
                            </div>
    
        </div>
   <?php include '../footer.php';?>

</body>

</html>