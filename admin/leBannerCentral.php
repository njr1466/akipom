<?php
include '../generated/include_dao.php';


if (isset($_GET['acao'])) {
    $id = $_GET['codigo'];
    DAOFactory::getBannercentralDAO()->delete($id);
    echo"<meta http-equiv='refresh' content=3;url='bannercentral.php'>";
}

$date = new DateTime(($_POST['datainicial']));
$link = $_POST['link'];
$datainicial = $date->format('Y-m-d');
$datafinal = substr($_POST['datafinal'], 6, 4) . "-" . substr($_POST['datafinal'], 3, 2) . "-" . substr($_POST['datafinal'], 0, 2);
$action = $_POST['action'];



$uploaddir = '../imagem/bannercentral/';
$nome = rand(00, 9999);
$uploadfile1 = $uploaddir . $nome . basename($_FILES['imagem1']['name']);


if (move_uploaded_file($_FILES['imagem1']['tmp_name'], $uploadfile1)) {
    $foto1 = $nome . basename($_FILES['imagem1']['name']);
    //echo "Arquivo válido e enviado com sucesso.\n";
} else {
    $foto1 = "";
    //echo "Possível ataque de upload de arquivo!\n";
}

if ($action == "add") {
    try {
        $transaction = new Transaction();
        $Bannercentral = new Bannercentral();
        $Bannercentral->datadecriacao = $datainicial;
        $Bannercentral->datainicial = $datainicial;
        $Bannercentral->datafinal = $datafinal;
        $Bannercentral->imagem = $foto1;
        $Bannercentral->link = $link;
        $id = DAOFactory::getBannercentralDAO()->insert($Bannercentral);
        $transaction->commit();
        echo"<meta http-equiv='refresh' content=3;url='addBannerCentral.php'>";
    } catch (Exception $exc) {
        //header('location: login.php?msg=error');
        echo $exc;
    }
}

if ($action == "edit") {
    try {
        $transaction = new Transaction();
        $Bannercentral = new Bannercentral();
        $Bannercentral->id = $_POST['id'];
        $Bannercentral->datadecriacao = $datainicial;
        $Bannercentral->datainicial = $datainicial;
        $Bannercentral->datafinal = $datafinal;
        $Bannercentral->link = $link;
        if (trim($foto1) == "") {
            $Bannercentral->imagem = $_POST['foto1only'];
        } else {
            $Bannercentral->imagem = $foto1;
        }
        
        DAOFactory::getBannercentralDAO()->update($Bannercentral);
        $transaction->commit();
        echo"<meta http-equiv='refresh' content=3;url='bannercentral.php'>";
    } catch (Exception $exc) {
        //header('location: login.php?msg=error');
        echo $exc;
    }
}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Área Administrativa AKIPOM</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">

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

                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-12">
                            <div class="well"><?php
if (isset($_GET['acao'])) {
    echo"Registro excluído com sucesso";
} else {

    if ($action == "add") {
        echo"Registro cadastrado com sucesso";
    }
    if ($action == "edit") {
        echo"Registro atualizado com sucesso";
    }
}
?>

                            </div>

                        </div>
                        <!--/col-->
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->

                    <hr>
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->
        <footer class="text-center">This Bootstrap 3 dashboard layout is compliments of
            <a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a>
        </footer>
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
