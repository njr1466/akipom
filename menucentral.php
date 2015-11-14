<nav class="navbar navbar-default navbar-static hidden-sm hidden-xs">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>


        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown dropdown-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="imagem/Icon - Estado.png" style="width: 17px; height: 17px">   Pernambuco <b class="caret"></b></a>
                </li>

                  <li class="dropdown dropdown-large">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="imagem/Icon - Cidade.png" style="width: 17px; height: 17px">   Cidade <b class="caret"></b></a>
                      <ul class="dropdown-menu dropdown-menu-large row" style="
                        margin-left: 0px;
                        margin-right: 0px;
                        margin-top: 0px;
                        left: 420px;
                        ">
                        <?php
                        $resultado = $classCidade->listarCidade();
                        while ($rowcidade = mysqli_fetch_assoc($resultado)) {
                            $cidade = $rowcidade['nome'];
                            ?>
                            <li>
                                <a href="#<?php echo $cidade; ?> ">
                                    <?php echo $cidade; ?>                               
                                </a>
                            </li>                       
                        <?php }; ?>
                    </ul>
                </li>
                
                <li class="dropdown dropdown-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="imagem/Icon - Bairro.png" style="width: 17px; height: 17px">   Bairro<b class="caret"></b></a>

                    <ul class="dropdown-menu dropdown-menu-large row" style="
                        margin-left: 0px;
                        margin-right: 0px;
                        margin-top: 0px;
                        left: 220px;
                        ">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Glyphicons</li>
                                <li><a href="#">Available glyphs</a></li>
                                <li class="disabled"><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Dropdowns</li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Button groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Button toolbar</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Nesting</a></li>
                                <li><a href="#">Vertical variation</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Button dropdowns</li>
                                <li><a href="#">Single button dropdowns</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Input groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Checkboxes and radio addons</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Navs</li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Pills</a></li>
                                <li><a href="#">Justified</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Navbar</li>
                                <li><a href="#">Default navbar</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Non-nav links</a></li>
                                <li><a href="#">Component alignment</a></li>
                                <li><a href="#">Fixed to top</a></li>
                                <li><a href="#">Fixed to bottom</a></li>
                                <li><a href="#">Static top</a></li>
                                <li><a href="#">Inverted navbar</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
               
                 <li class="dropdown dropdown-large">
                    <form class="navbar-form navbar-right text-left" role="search">
                        <div class="input-group stylish-input-group " style="left: 45px;">
                            <div id="imaginary_container"> 
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Buscar ofertas, etc..." style="
                                           width: 426px;
                                           height: 33px;
                                           ">
                                    <button type="submit" class="btn btn-default " style="background-image: url(lupamenor.png);width: 36px;height: 33px;padding-right: 0px;border-left-width: 0px;border-right-width: 0px;border-top-width: 0px;border-bottom-width: 0px;padding-bottom: 0px;padding-left: 0px;padding-top: 0px;"> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>

        </div>
    </div><!-- /.nav-collapse -->
</nav>