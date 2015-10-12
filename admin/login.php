<?php


?>

<!DOCTYPE html>
	<html>
		
		<head>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
			<meta charset="utf-8">
			<title>Área Administrativa AKIPOM</title>
			<meta name="generator" content="Bootply">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!--[if lt IE 9]>
				<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link href="css/styles.css" rel="stylesheet">
		</head>
		<style>
		body{
    background-color:#f5f5f5;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 80px;
    padding: 40px 0px 20px 0px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
}
.login-title
{
    color: #555;
    font-size: 22px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-img
{
	border-radius: 50%;
    display: block;
    height: 75px;
    margin: 0 30px 10px;
    width: 75px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-name
{
    display: block;
    margin: 30px 10px 10px;
}

.logo-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

		</style>
		<body>
			<!-- header -->
			<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							
						</ul>
					</div>
				</div>
				<!-- /container -->
			</div>
			<!-- /Header -->
			<!-- Main -->
			<div class="container-fluid">
				<div class="row">
					
					<!-- /col-3 -->
					<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
						<div class="tab-pane active" id="login">
               		
               			<form class="form-signin" action="lelogin.php" method="POST">
                                    <input type="text" id="login" name="login" class="form-control" placeholder="Username" required autofocus>
                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
               				<input type="submit" class="btn btn-lg btn-default btn-block" value="Entrar" />
                                        <?php if(isset($_GET['acao'])){
                                            echo"Senha Incorreta";
                                        }
                                        ?>
               			</form>
               									<div class="tab-pane" id="user1">
				
						</div>
					</div>
            </div>
        </div>
    </div>
</div>
						</div>
						<!--/row-->
											</div>
					<!--/col-span-9-->
				</div>
			</div>
			<!-- /Main -->
			
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