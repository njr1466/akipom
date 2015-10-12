<?php
include 'sessao.php';
require_once 'conexao.php';
$class = new Funcoes();
include '../generated/include_dao.php';
?>


<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


        <title>Área Administrativa AKIPOM</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <script>
        function myFunction(id) {
            var answer = confirm("Deseja excluir este registro?")
            if (answer) {
                window.location = "leBannerCentral.php?acao=deletar&codigo=" + id + "";
            }
            else {
                alert("Obrigado")
            }
        }
    </script>
    <script language="javascript">
        function atualizarPrincipal(valor) {
            url = "atualizarOfertaPrincipal.php?codigo=" + valor; // arquivo que pesquisa se o usuario existe
            div = "pesquisaUsuario"; // div com o id "pesquisaUsuario". você pode colocar qualquer nome

            ajax(url);

            alert(document.getElementById(div).innerHTML);

        }

        function ajax(url) {
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
    <body>
        <!-- header -->
        <?php include"header.php" ?>
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
                            <!--tabs-->
                            <div class="container">
                                <div class="row">

                                    <div class="container">
                                        <div class="well"><div class="btn-group btn-group-justified">
                                                <a href="addBannerCentral.php" class="btn btn-primary col-sm-3">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <br> Adicionar
                                                </a>

                                                <a href="bannercentral.php" class="btn btn-primary col-sm-3">
                                                    <i class="glyphicon glyphicon-th-list"></i>
                                                    <br> Listar
                                                </a>

                                            </div>
                                            <table class="table table-striped custab">
                                                <thead>

                                                    <tr>
                                                        <th>Código </th>
                                                        <th>Imagem </th>
                                                        <th>Data Inicial</th>
                                                        <th>Data Final</th>
                                                        <th class="text-center">Ações</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                

                                                $array = DAOFactory::getBannercentralDAO()->queryAll();
                                                $count = count($array);
                                                for ($i = 0; $i < $count; $i++) {
                                                    $id1 = $array[$i]->id;
                                                    $datainicial = $array[$i]->datainicial;
                                                    $datafinal = $array[$i]->datafinal;
                                                    $imagem = $array[$i]->imagem;
                                                   
                                                    ?>       
                                                    <tr>
                                                        <td> <?php echo $id1; ?></td>
                                                        <td><img src="../imagem/bannercentral/<?php echo $imagem ?>" style="width: 400px;height: 60px"></td>
                                                        <td><?php echo $datainicial; ?></td>
                                                        <td><?php echo $datafinal; ?></td>
                                                        <td class="text-center"><a class='btn btn-info btn-xs' href="editbannercentral.php?codigo=<?php echo $id1; ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</a> <a href="#" class="btn btn-danger btn-xs" onclick="myFunction(<?php echo $id1; ?>)"><span class="glyphicon glyphicon-remove" ></span> Excluir</a></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
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
                    <hr>
                    <a href="#"></a>
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