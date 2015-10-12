<?php 
                  
                    $classPromocao = new Funcoes();
                    if(isset($_GET['qtd'])){
                        $value = $_GET['qtd'];
                    $bool = ( !is_int($value) ? (ctype_digit($value)) : true );
                        if($bool){
                      $_SESSION['carregar'] = $_GET[qtd];
                      
                    }else{
                      $_SESSION['carregar'] = 1;    
                    }
                    echo $_GET['qtd'];
                    $resu = $classPromocao->listarOfertaComum(6 * $_SESSION['carregar']);
                    }else{
                     
                        $_SESSION['carregar'] = 1;
                        $resu = $classPromocao->listarOfertaComum(6 * $_SESSION['carregar']);
                    }

                    while ($row = mysqli_fetch_assoc($resu)) {
                    $id= $row['id'];
                    $id_cliente = $row['id_cliente'];
                    $valorantigo = (float) $row['valorantigo'];
                    $valor = (float) $row['valor'];
                    $desconto = $row['desconto'];
                    $qtd = $row['qtd'];
                    $descricao = $row['descricao'];
                    $promocao = $row['promocao'];
                    $date = new DateTime($row['datainicial']);
                    $datainicial = $date->format('d.m.Y');
                    $date = new DateTime($row['datafinal']);
                    $datafinal = $date->format('d.m.Y');
                    $principal = $row['principal'];
                    $ativo = $row['ativo'];
                    $imagem1 = $row['foto1'];
                    $imagem2 = $row['foto2'];
                    $imagem3 = $row['foto3'];
                    $mapa = $row['mapa'];
                    
                    
                    ?>
                    <div class="col-md-4" style="padding-left: 0px;">
                        <div class="thumbnail" >
                            <a href="ofertaexibida.php?oferta=<?php echo $id;?>" style="color: #885521"> <img src="<?php echo'imagem/fotos/'.$imagem1;?>"
                                 alt="" class="img-rounded"></a>
                            <div class="caption">
                                <h4 >
                                    <a href="ofertaexibida.php?oferta=<?php echo $id;?>" style="color: #333333"><?php echo $promocao;?></a>
                                </h4>
                                <p>
                            </div> 
                            <div class="row" style="margin-left: 0px; margin-right: 0px" >
                                <div class="col-xs-6" style="background-color: #E9E9E9">
                                    <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">R$ <strike><?php echo number_format($valorantigo, 2, ',', '.');?></strike></p>
                                    <p style="color: #333333;text-align:center;font-size: 16px;font-weight: bold; ">R$ <?php echo number_format($valor, 2, ',', '.');?></p>
                                </div>
                                <div class="col-xs-6" style="background-color: #E2E2E2"> 
                                    <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Restam</p>
                                    <p style="color: #333333;text-align:center; font-size: 16px;font-weight: bold;"><?php echo $qtd;?></p>
                                </div>

                                <div class="col-xs-6" style="background-color: #E2E2E2">
                                    <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Desconto de</p>
                                    <p style="color: #333333;text-align:center;font-size: 18px;font-weight: bold;"><?php echo $desconto;?>%</p>
                                </div>
                                <div class="col-xs-6" style="background-color: #E9E9E9"> 
                                    <p style="color: #333333;text-align:center;font-size: 11px;height: 10px ;padding-top: 8px;">Finaliza em </p>
                                    <p style="color: #333333;text-align:center; font-size: 18px;font-weight: bold;">2 dias</p>
                                </div>

                            </div>
                            <p>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <div class="ratings" style="text-align: center">
                                   <a href="ofertaexibida.php?oferta=<?php echo $id;?>" style="color: #885521">  <button type="button" class="btn btn-primary" style="width:100%"><?php echo utf8_decode("PEGAR CUPOM GRÁTIS");?></button></a>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-right: 0px;width: auto;">
                                <p style="text-align: center;font-size: 11px;"><?php echo utf8_decode("Validade até ".$datafinal);?></p>
                            </div>

                        </div>
                    </div>
                    <?php };?>
