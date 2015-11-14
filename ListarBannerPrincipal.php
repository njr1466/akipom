  <div id="carousel-example-generic" class="carousel hidden-sm hidden-xs slide"
         data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $array = DAOFactory::getBannersuperiorDAO()->queryAll();
            
            ?>   


            <div class="active item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[0]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[0]->texto1); ?></h2>
                    <p><?php echo ($array[0]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
            <div class=" item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[1]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[1]->texto1); ?></h2>
                    <p><?php echo ($array[1]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
            <div class=" item">
                <img class="slide-image" src="imagem/bannersuperior/<?php echo ($array[2]->imagem) ?>" alt="">
                <div class="carousel-caption">
                    <h2><?php echo ($array[2]->texto1); ?></h2>
                    <p><?php echo ($array[2]->texto2); ?></p>
                    <p><button type="button" class="btn btn-primary">Confira</button></p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>

        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>

        </a>
    </div>