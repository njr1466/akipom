<?php
include 'sessao.php';
require_once 'conexao.php';
$class = new Funcoes();
?>


<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        
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
                window.location = "leoferta.php?acao=deletar&codigo=" + id + "";
            }
            else {
                alert("Thanks for sticking around!")
            }
        }
    </script>
    <script language="javascript">
  function atualizarPrincipal(valor) { 
    url = "atualizarOfertaPrincipal.php?codigo="+valor; // arquivo que pesquisa se o usuario existe
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
    if (req.status ==200) {
      document.getElementById(div).innerHTML = req.responseText;
    } else{
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
                                                <a href="addoferta.php" class="btn btn-primary col-sm-3">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <br> Adicionar
                                                </a>

                                                <a href="oferta.php" class="btn btn-primary col-sm-3">
                                                    <i class="glyphicon glyphicon-th-list"></i>
                                                    <br> Listar
                                                </a>

                                            </div>
                                            <table class="table table-striped custab">
                                                <thead>

                                                    <tr>
                                                        <th>Promoção Principal</th>
                                                        <th>Imagem</th>
                                                        <th>Promoção</th>
                                                        <th>Empresa</th>
                                                        <th class="text-center">Ações</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $result = $class->listarOfertaEmpresa();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $promocao = $row['promocao'];
                                                    $empresa = $row['empresa'];
                                                    $principal = $row['principal'];
                                                    $imagem = $row['foto1'];

                                                    ?>       
                                                    <tr>
                                                        <td><div class="checkbox">
                                                                <label><input id="principal" name="principal" onclick="atualizarPrincipal(this)" type="checkbox" value="1" <?php if($principal==1){echo "checked='checked'";}?>></label>
                                                            </div></td>
                                                            <td><img src="../imagem/fotos/<?php echo $imagem ?>" style="width: 100px;height: 60px"></td>
                                                        <td><?php echo $promocao; ?></td>
                                                        <td><?php echo $empresa; ?></td>
                                                        <td class="text-center"><a class='btn btn-info btn-xs' href="editoferta.php?codigo=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</a> <a href="#" class="btn btn-danger btn-xs" onclick="myFunction(<?php echo $id; ?>)"><span class="glyphicon glyphicon-remove" ></span> Excluir</a></td>
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