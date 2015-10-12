<div class="section section-success hidden-sm hidden-xs" style="background-color: #885521" id="footer">

    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-xs-4">   <h3 style="color: #e8b530;">Cadastre- se receba ofertas e descontos exclusivos

                    </h3></div>
                <div class="col-xs-8"> <form id="signin" class="navbar-form navbar-right" role="form">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input id="nome" type="text" class="form-control" name="nome" value="" size="30" placeholder="Digite seu nome">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input id="email" type="email" class="form-control" name="email"  size="30" value="" placeholder="Digite seu email">                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form></div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-2" style="width: 20%">
                <img src="imagem/LOGO.png"
                     class="img-responsive">

            </div>
            <div class="col-md-2" style="width: 20%; ">

                <h2 style="color: #e8b530;font-size: 17px">O akipom</h2>
                <p style="color: #ffffff">Quem Somos
                    <br>Política de Privacidade
                    <br>Termos de uso
                    <br>Imprensa
                    <br>Seja um Parceiro
                </p>
            </div>
            <div class="col-md-2" style="width: 20%;">

                <h2 style="color: #e8b530;font-size: 17px">Categorias</h2>
                <p style="color: #ffffff">            
                    <?php
                    $class = new Funcoes();
                    $result = $class->listarCategoria();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $categoria = $row['nome'];
                        ?>
                        <?php echo ucfirst(strtolower($categoria)) . "<br>"; ?>
                    <?php } ?>

                </p>
            </div>
            <div class="col-md-2" style="width: 20%;">

                <h2 style="color: #e8b530;font-size: 17px">Dúvidas</h2>
                <p style="color: #ffffff">Como Funciona
                    <br>Perguntas Frequentes
                    <br>Fale Conosco
                </p>
            </div>
            <div class="col-md-2" style="width: 20%;">
                <h2 style="color: #e8b530;font-size: 17px">Contato</h2>
                <p style="color: #ffffff">(81) 0000 0000</p>
                <p style="color: #ffffff">segunda a sexta: 8h às 18h (exceto feriados)</p>

                <table cellspacing="10">

                    <tr>
                        <td><img src="facebook.jpg" class="img-responsive"></td>                
                        <td style="color: #ffffff;padding-left: 5px;">Curta nossa página</td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;"> <img src="twitter.jpg" class="img-responsive"></td>
                        <td style="color: #ffffff;padding-left: 5px;">Siga nossas novidades</td>
                    </tr>
                    <tr>
                       <td style="padding-top: 5px;"> <img src="apple.jpg" class="img-responsive"></td>
                        <td style="color: #ffffff;padding-left: 5px;">Aplicativo IOS</td>
                    </tr>
                    <tr>
                        <td style="padding-top: 5px;"> <img src="android.png" class="img-responsive"></td>
                        <td style="color: #ffffff;padding-left: 5px;">Aplicativo Android</td>
                    </tr>

                </table>


            </div>
        </div>


        <div class="page-header">
            <div class="row">
            </div>
            <div ><br> 
                <p style="color: #e8b530; text-align: center">Copyright 2015, akipom, Todos os direitos reservados. | Todas as ofertas são de responsabilidade dos estabelecimentos.</p>                                       
            </div>

        </div>

    </div>
</div>

<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

