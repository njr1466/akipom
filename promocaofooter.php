<?php
$classOfertasFooter = new Funcoes();
include './generated/include_dao.php';
$array = DAOFactory::getCategoriadestaqueDAO()->queryAll();
//$resultadoFooter = $classOfertasFooter->listarOfertaComum(3);

for ($i = 0; $i < count($array); $i++) {

    $id = $array[$i]->id;
    $texto = $array[$i]->texto;
    $imagem = $array[$i]->imagem;
    $link = $array[$i]->link;
//                    while ($row = mysqli_fetch_assoc($resultadoFooter)) {
//                    $id= $row['id'];
//                    $id_cliente = $row['id_cliente'];
//                    $valorantigo = (float) $row['valorantigo'];
//                    $valor = (float) $row['valor'];
//                    $desconto = $row['desconto'];
//                    $qtd = $row['qtd'];
//                    $descricao = $row['descricao'];
//                    $promocao = $row['promocao'];
//                    $date = new DateTime($row['datainicial']);
//                    $datainicial = $date->format('d.m.Y');
//                    $date = new DateTime($row['datafinal']);
//                    $datafinal = $date->format('d.m.Y');
//                    $principal = $row['principal'];
//                    $ativo = $row['ativo'];
//                    $imagem1 = $row['foto1'];
//                    $imagem2 = $row['foto2'];
//                    $imagem3 = $row['foto3'];
//                    $mapa = $row['mapa'];
    ?>

    <div class="col-md-4 hidden-sm hidden-xs" style="padding-left: 0px;" >
        <div class="thumbnail" style="height: 210px;background-color: #e8b530 ">


            <table cellspacing="10">

                <tr>
                    <td style="width: 180px;"><img class="img-responsive" style="height: 200px;width:300px" src="<?php echo'imagem/' . $imagem; ?>">  </td>                
                    <td style="color: #ffffff;padding-left: 5px;"><?php echo $texto; ?><br><br>
                        <div class="ratings" style="text-align: center">
                            <a href="<?php echo $link; ?>"> <button type="button" class="btn btn-primary" style="width:80%"> <?php echo utf8_decode("CONFIRA"); ?></button> </a>
                        </div></td>
                </tr>


            </table>


        </div>
    </div>

<?php } ?>
