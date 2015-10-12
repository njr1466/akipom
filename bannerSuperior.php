<div id="carousel-example-generic" class="carousel hidden-sm hidden-xs slide"
     data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
        <?php
        include '../generated/include_dao.php';
        $transaction = new Transaction();
        try {
            $array = DAOFactory::getBannersuperiorDAO()->queryAll();
            echo $array[0]->id;
            $count = count($array);
            echo $count;
            for ($i = 0; $i < $count; $i++) {
                ?>

                <div class="active item">
                    <img class="slide-image" src="img1.png" alt="">
                    <div class="carousel-caption">
                        <h2><?php echo utf8_decode($resultado[$i]->texto1); ?></h2>
                        <p><?php echo utf8_decode($resultado[$i]->texto2); ?></p>
                        <p><button type="button" class="btn btn-primary">Confira</button></p>
                    </div>
                </div>


            <?php
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

        <span class="glyphicon glyphicon-chevron-left"></span>

    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

        <span class="glyphicon glyphicon-chevron-right"></span>

    </a>
</div>
