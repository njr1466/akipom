<?php
include 'admin/conexao.php';
$class = new Funcoes();
$classCidade = new Funcoes();
session_start();
?>

<?php
$app_id = '291800824265211';  //Facebook App ID
$app_secret = 'aba6731a607f6568ad26b044d78888df'; //Facebook App Secret
$required_scope = 'public_profile, publish_actions, email'; //Permissions required
$redirect_url = 'http://gerens.com.br/akipom/login.php'; //FB redirects to this page with a code
//include autoload.php from SDK folder, just point to the file like this:
require_once "facebook/autoload.php";

//import required class to the current scope
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRedirectLoginHelper;

//Session should be active



FacebookSession::setDefaultApplication($app_id, $app_secret);
$helper = new FacebookRedirectLoginHelper($redirect_url);

//try to get current user session
try {
    $session = $helper->getSessionFromRedirect();
} catch (FacebookRequestException $ex) {
    die(" Error : " . $ex->getMessage());
} catch (\Exception $ex) {
    die(" Error : " . $ex->getMessage());
}

if ($session) { //if we have the FB session
    $user_profile = (new FacebookRequest($session, 'GET', '/me'))->execute()->getGraphObject(GraphUser::className());
    //do stuff below, save user info to database etc.

    $_SESSION['logado'] = 1;
    setcookie('usuario', 'logado');
    //echo '<pre>';
    //print_r($user_profile); //Or just print all user details
    //echo '</pre>';
    //echo $_SESSION['logado'];


    $_SESSION['UID'] = $user_profile->getProperty('id');
    $_SESSION['NAME'] = $user_profile->getProperty('name');
    $_SESSION['FIRSTNAME'] = $user_profile->getProperty('first_name');
    $_SESSION['EMAIL'] = $user_profile->getProperty('email');
} else {
    //display login url 
    $login_url = $helper->getLoginUrl(array('scope' => $required_scope));

   
//echo "<meta http-equiv='refresh' content=1;url='index.php'>";   
//echo '<a href="'.$login_url.'">Login with Facebook</a>'; 
}
if (trim($_SESSION['url']) == "") {
        $url = "index.php";
    } else {
        $url = $_SESSION['url'];
    }

if (isset($_SESSION['logado'])) {
    //$class->inserirClientes($_SESSION['NAME'], $_SESSION['FIRSTNAME'], $_SESSION['EMAIL'], "");
   
    echo "<meta http-equiv='refresh' content=1;url='$url'>";
//echo $_SESSION['url'];
}
?>
<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Akipom</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/full-width-pics.css" rel="stylesheet">
        <script src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<?php
if (isset($_GET['msg'])) {
    ?>
            <script language="javascript">
                $(document).ready(function () {
                    $('#loginbox').hide();
                    $('#signupbox').show();
                });
            </script>

            <?php
        }
        ?>
        <script language="javascript">
            $(document).ready(function () {
                var y_fixo = $("#menu").offset().top;
                $(window).scroll(function () {
                    if ($(document).scrollTop() > 600 && $(document).scrollTop() < 1670) {
                        $("#menu").animate({
                            top: ($(document).scrollTop() - 600) + "px"
                        }, {duration: 500, queue: false}
                        );
                    }

                    if ($(document).scrollTop() < 600) {
                        $("#menu").animate({
                            top: (0) + "px"
                        }, {duration: 500, queue: false}
                        );
                    }

                });
            });
        </script>





    </head>

    <body style="margin-top: 0px;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<?php include 'topo.php'; ?>


        <div style="background-image: url(imagem/Header2.png); height: 220px; width: 100%"
             class="hidden-sm hidden-xs">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
    

<?php if (isset($_GET['msg'])) { ?>
  
             <div class="container">

            <div class="container">    
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    x </button>
                                <span class="glyphicon glyphicon-ok"></span> <strong>Mensagem</strong>
                                <hr class="message-inner-separator">
                                <p>
                                   <?php  echo ("Este Email já está cadastrado "); ?></p>
                            </div>
                        </div>
                       
                    </div>
                </div>



            </div> 
        </div>


<?php } ?>
    <div class="container">

        <div class="container">    
            <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Entrar</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu a senha?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form">
                            <div class="input-group">
                                <img id="profile-img" class="profile-img-card " src="https://graph.facebook.com/<?php echo $_SESSION['UID']; ?>/picture" />     
                            </div><br>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="email">                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="senha" placeholder="senha">
                            </div>



                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">

                                    <a class="btn btn-success" id="btn-login" href="#">Login</a> 
                                    <a id="btn-fblogin" href="<?php echo $login_url; ?>"   class="btn btn-primary" data-auto-logout-link="false">Login com Facebook</a>

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Ainda não é cadastrado! 
                                        <a href="#" onClick="$('#loginbox').hide();
                                                $('#signupbox').show()">
                                            Clique Aqui
                                        </a>
                                    </div>
                                </div>
                            </div>    
                        </form>     



                    </div>                     
                </div>  
            </div>
            <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Cadastro</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide();
                                $('#loginbox').show()">Login</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" name="signupform" class="form-horizontal" role="form" action="inserirUsuario.php" method="post">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>



                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="Email Address" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Nome</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Sobrenome</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" required="true">
                                </div>
                            </div>



                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>
                                    <span style="margin-left:8px;">or</span>  
                                </div>
                            </div>

                            <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-fbsignup" type="button" class="btn btn-primary" ><i class="icon-facebook"></i>   Login com Facebook</button>
                                </div>                                           

                            </div>



                        </form>
                    </div>
                </div>




            </div> 
        </div>

    </div>
<?php include 'footer.php'; ?>

</body>

</html>