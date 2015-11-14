<?php
$classPromocao = new Funcoes();
$resu = DAOFactory::getOfertasDAO()->queryByIdCategoria($_GET['categoria']);
$categoria = DAOFactory::getCategoriasDAO()->load($_GET['categoria']);
?>

<h5> Recife > <?php echo $categoria->nome;?></h5>
<?php

for ($i = 0; $i < count($resu); $i++) {

    if (isset($_GET['categoria'])) {

        if ($resu[$i]->principalcategoria == 1) {
            $id = $resu[$i]->id;
            $id_cliente = $resu[$i]->idCliente;
            $valorantigo = (float) $resu[$i]->valorantigo;
            $valor = (float) $resu[$i]->valor;
            $desconto = $resu[$i]->desconto;
            $qtd = $resu[$i]->qtd;
            $descricao = $resu[$i]->descricao;
            $promocao = $resu[$i]->promocao;
            $date = new DateTime($resu[$i]->datainicial);
            $datainicial = $date->format('d.m.Y');
            $date = new DateTime($resu[$i]->datafinal);
            $datafinal = $date->format('d.m.Y');
            $principal =$resu[$i]->principal;
            $ativo = $resu[$i]->ativo;
            $imagem1 = $resu[$i]->foto1;
            $imagem2 = $resu[$i]->foto2;
            $imagem3 = $resu[$i]->foto3;
            $mapa = $resu[$i]->mapa;
            ?>
            <div class="col-md-4" style="padding-left: 0px;">
                <div class="thumbnail" >
                    <a href="ofertaexibida.php?oferta=<?php echo $id; ?>" style="color: #885521"> <img src="<?php echo'imagem/fotos/' . $imagem1; ?>"
                                                                                                      alt="" class="img-rounded"></a>
                    <div class="caption">
                        <h4 >
                            <a href="ofertaexibida.php?oferta=<?php echo $id; ?>" style="color: #333333"><?php echo $promocao; ?></a>
                        </h4>
                        <p>
                    </div> 
                    <div class="row" style="margin-left: 0px; margin-right: 0px" >
                        <div class="col-xs-6" style="background-color: #E9E9E9">
                            <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">R$ <strike><?php echo number_format($valorantigo, 2, ',', '.'); ?></strike></p>
                            <p style="color: #333333;text-align:center;font-size: 16px;font-weight: bold; ">R$ <?php echo number_format($valor, 2, ',', '.'); ?></p>
                        </div>
                        <div class="col-xs-6" style="background-color: #E2E2E2"> 
                            <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Restam</p>
                            <p style="color: #333333;text-align:center; font-size: 16px;font-weight: bold;"><?php echo $qtd; ?></p>
                        </div>

                        <div class="col-xs-6" style="background-color: #E2E2E2">
                            <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Desconto de</p>
                            <p style="color: #333333;text-align:center;font-size: 18px;font-weight: bold;"><?php echo $desconto; ?>%</p>
                        </div>
                        <div class="col-xs-6" style="background-color: #E9E9E9"> 
                            <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Finaliza em </p>
                            <p style="color: #333333;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                        </div>

                    </div>
                    <p>
                    <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                        <div class="ratings" style="text-align: center">
                            <a href="ofertaexibida.php?oferta=<?php echo $id; ?>" style="color: #885521">  <button type="button" class="btn btn-primary" style="width:100%"><?php echo utf8_decode("PEGAR CUPOM GRÁTIS"); ?></button></a>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                        <p style="text-align: center;font-size: 11px;"><?php echo utf8_decode("Validade até " . $datafinal); ?></p>
                    </div>

                </div>
            </div>
            <?php }}}; ?>