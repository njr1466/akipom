<?php
include 'sessao.php';
require_once 'conexao.php';
$class = new Funcoes();
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
		
		<body>
			<!-- header -->
			<?php include 'header.php';?>
			<!-- /Header -->
			<!-- Main -->
			<div class="container-fluid">
				<div class="row">
					<?php include "menu.php";?>
					<!-- /col-3 -->
					<div class="col-sm-9">
						<!-- column 2 -->
						<a href="#"></a>
						<hr>
						<div class="row">
							<!-- center left-->
							<div class="col-md-12">
													<!--tabs-->
								<div class="container">
									<div class="row">
									
										<div class="col-md-12">
											<div class="panel-group" id="accordion">
												<form  action="lecidade.php" method="post">
												<div class="panel panel-default">
												
													<div class="panel-heading">
													<div class="btn-group btn-group-justified">
                                                                                                            <a href="addcidade.php" class="btn btn-primary col-sm-3">
										<i class="glyphicon glyphicon-plus"></i>
										<br> Adicionar
										</a>
								
										<a href="cidade.php" class="btn btn-primary col-sm-3">
										<i class="glyphicon glyphicon-th-list"></i>
										<br> Listar
										</a>
								
									</div>
														<h4 class="panel-title"></h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse in">
														<div class="panel-body">
															<div class="row">
															<input name="action" type="hidden" value="add">
																<div class="col-md-12">
																	<div class="form-group">
																		<input name="nome" type="text" class="form-control" placeholder="Cidade" required="">
																	</div>
																	<div class="form-group">
																		<textarea name="uf" class="form-control" placeholder="uf" rows="5" required=""></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" class="btn btn-success btn-sm">
																	<span class="glyphicon glyphicon-floppy-disk"></span>  Salvar  </button>
															</div>
														</div>
													</div>
												</div>
												</form>
												
											</div>
										</div>
										
									</div>
								</div>
								<!--/tabs-->
							</div>
							<!--/col-->
							<!--/col-span-6-->
						</div>
						<!--/row-->
											</div>
					<!--/col-span-9-->
				</div>
			</div>
			<!-- /Main -->
			<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of
				<a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a>
			</footer>
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