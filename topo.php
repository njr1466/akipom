<?php
session_start();
if (isset($_SESSION['logado'])) {
    ?>
 <div class="carousel navbar-collapse hidden-sm hidden-xs" id="dropdown-thumbnail-preview" style="background-color: #151516; height: 45px;width:100%">
<div class="container" >
        <ul class="nav navbar-nav navbar-right ">
            <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="index.php" class="dropdown-toggle"  style="color: #ffffff;padding-bottom: 8px;">Home</a>

            </li> 

            <li class="dropdown thumb-dropdown" style="height: 43px;">
                 <a href="index.php" class="dropdown-toggle"  style="color: #ffffff;padding-bottom: 8px;">Anuncie</a>
            </li>
           
            <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;padding-bottom: 8px;"><?php echo $_SESSION['NAME']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                    <li><a href="meusCupons.php">  Meus Cupons </a></li>       
                    <li>  Editar Dados </li>    
                    <li><a href="logout.php">  Logout </a></li> 

                </ul>
            </li>
            <li ><img style="width: 40px;height: 40px;padding-top: 10px;padding-right: 10px;" class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['UID']; ?>/picture"></li>
        </ul>

    </div>

</div>

    <?php
} else {
    ?>
     <div class="carousel navbar-collapse hidden-sm hidden-xs" id="dropdown-thumbnail-preview" style="background-color: #151516; height: 45px;width:100%">
<div class="container" >
        <ul class="nav navbar-nav navbar-right ">
            <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="index.php" class="dropdown-toggle"  style="color: #ffffff;padding-bottom: 8px;">Home</a>

            </li> 

            <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="index.php" class="dropdown-toggle"  style="color: #ffffff;padding-bottom: 8px;">Anuncie</a>
            </li>
            <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="login.php" class="dropdown-toggle" style="color: #ffffff;padding-bottom: 8px;">Cadastre-se </a>

            </li>
            
           <li class="dropdown thumb-dropdown" style="height: 43px;">
                <a href="login.php" class="dropdown-toggle" style="color: #ffffff;padding-bottom: 8px;">Login</a>

            </li>
        </ul>

    </div>

</div>




    <?php
};
?>