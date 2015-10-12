	<?php


	class Funcoes{



		 function __construct(){
		 
		   $mysqli = new mysqli("localhost", "root", "", "akipom");
		   /* check connection */
				if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
				}
		  		 
			}

		 
		 
		 
		 
		 
		 function inserirCategoria($nomeCategoria,$descricao){
			 
			
	/* Prepare an insert statement */
	$query = "INSERT INTO categorias (nome, descricao) VALUES (?,?)";
	$stmt = $mysqli->prepare($query);

	$stmt->bind_param("ss", $val2, $val3);

	$val2 = $nomeCategoria;
	$val3 = $descricao;
	$stmt->execute();
			
	 }	
		 
		 
		 
	//***********************************************************************************************************************************
	// Método execulta o login do sistema
	//***********************************************************************************************************************************
		 

	function efetuarLogin($login,$senha){

		 
			 $sql = "select * from usuarios where usuario='".$login."' and senha='".$senha. "'";
			 $resultado = mysql_query($sql);
			 $num = mysql_num_rows($resultado);
		
		 
			 if($num > 0){
				return 1;
			 }else{
				return 0;
			 }
		 
			
		 }
		 
		 
	//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaEmail(){

		 
			 $sql = "select * from email where situacao=1 and email <>'' ";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}

	function retornaEmailLidos($remessa,$pagina,$limit){

		 
			 $sql = "SELECT e.email, e.nome, r.nome AS remessa, l.data
					FROM email_lido l, email e, remessa r
					WHERE l.codigo_email = e.idemail
					AND l.codigo_remessa = r.idremessa and l.codigo_remessa=".$remessa." limit ".$pagina.",".$limit."";
			 
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}

	function retornaQtdEmailLidos($idremessa){

			 $sql = " SELECT * FROM email_lido  WHERE codigo_remessa=$idremessa ";

			 $resultado = mysql_query($sql);
			 return $resultado;
			 
		 }	


	function retornaEmailNome($mail){

			
				$sql = "select * from email where email like'%$mail%' || empresa like'%$mail%' || nome like'%$mail%' || cnpj like'%$mail%'";
		
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}	

	function retornaEmailInativoTela($mail){

			
				$sql = "select * from email where  situacao=0 and (email like'%$mail%' or empresa like'%$mail%' or nome like'%$mail%' or cnpj like'%$mail%' ) ";
			 
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}		

	function retornaEmailGrupo($grupo){

		 
			 $sql = "SELECT DISTINCT(idemail), email . * FROM email 
				 INNER JOIN email_grupo ON ( email_grupo.codigo_email = 		email.idemail )
				 WHERE email_grupo.codigo_grupo IN($grupo) and email.situacao=1 and email <> '' ";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 } 
		 
	function retornaReenviarEmail($idremessa){

		 
			 $sql = "SELECT DISTINCT(er.idemail), e.* FROM envio_erro er 
					inner join email e on(e.idemail = er.idemail)
					where er.idremessa= $idremessa ";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 } 	 
		 
	//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaEmailAniversario($dia,$mes,$grupo){

		 
			 $sql = "SELECT DISTINCT (idemail), email . * FROM email 
				 INNER JOIN email_grupo ON ( email_grupo.codigo_email = email.idemail )
				 WHERE email_grupo.codigo_grupo IN($grupo) and email.dia=$dia and email.mes=$mes and situacao=1";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 }		
		 
	//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaTodosEmailAniversario($dia,$mes){

		 
			 $sql = "SELECT DISTINCT (idemail), email . * FROM email WHERE email.dia=$dia and email.mes=$mes and situacao=1";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 }		  
		 
		//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaEmailLimitNome($pagina,$limit,$mail){

			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
			
				  $sql = "select * from email where email like'%$mail%' || empresa like'%$mail%' || nome like'%$mail%' || cnpj like'%$mail%' limit ".$pagina.",".$limit;
		
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}	

	function retornaEmailLimitInativo($pagina,$limit,$mail){

			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
			
				  $sql = "select * from email where situacao=0 and (email like'%$mail%' or empresa like'%$mail%' or nome like'%$mail%' or cnpj like'%$mail%')  limit ".$pagina.",".$limit;
		
			 $resultado = mysql_query($sql)  or die("Error: " . mysql_error() . "<br />In Query: " . $sql);;
			 
		
			 return $resultado;
		 
			
	}	  
		 
	function retornaEmailLimit($pagina,$limit){

			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
			 
			 $sql = "select * from email limit ".$pagina.",".$limit;
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
	}	  	 

		 
	//***********************************************************************************************************************************
	// Método inseri email enviado
	//***********************************************************************************************************************************
		 

	function inserirEmailEnvio($idemail,$idremessa){

		 
			 $sql = "select * from usuarios where usuario='".$login."' and senha='".$senha. "'";
			 $resultado = mysql_query($sql);
			 $num = mysql_num_rows($resultado);
		
		 
			 if($num > 0){
				return 1;
			 }else{
				return 0;
			 }
		 
	}
		 
	//***********************************************************************************************************************************
	// Método inseri email enviado
	//***********************************************************************************************************************************
		 

	function selectEmailPorCodigo($idemail){

		 
			 $sql = "select * from email where idemail=".$idemail;
			 $result = mysql_query($sql);
		 
			 return $result;
		 
			
		 }



	//***********************************************************************************************************************************
	// Método altera email 
	//***********************************************************************************************************************************
		 

	function updateEmail($id,$email,$nome,$sobrenome,$dia,$mes,$empresa,$fantasia,$cnpj,$endereco,$cidade,$estado,$cep,$telefone,$ddd,$telefone1,$ddd1,                     $celular,$dddcelular,$celular1,$dddcelular1,$operadora,$operadora1,$situacao){

		 
			 $sql = "update email set email='$email',nome='$nome',sobrenome='$sobrenome',dia=$dia,mes=$mes,empresa='$empresa',fantasia='$fantasia',cnpj='$cnpj',
			 endereco='$endereco',cidade='$cidade',estado='$estado',cep='$cep',fone='$telefone',ddd='$ddd',fone1='$telefone1',			 				         ddd1='$ddd1',celular='$celular',dddcelular='$dddcelular',celular1='$celular1',dddcelular1='$dddcelular1',
			 operadora='$operadora',operadora1='$operadora1',situacao='$situacao' where idemail=".$id;
		
			 mysql_query($sql);
		 

		 
			
		 }
		 
		 
	//***********************************************************************************************************************************
	// Método inseri email 
	//***********************************************************************************************************************************
		 

	function insertEmail($id,$email,$nome,$sobrenome,$dia,$mes,$empresa,$fantasia,$cnpj,$endereco,$cidade,$estado,$cep,$telefone,$ddd,$telefone1,$ddd1,$celular,$dddcelular,$celular1,$dddcelular1,$operadora,$operadora1,$situacao){

		 $sql = "insert into email (email,nome,sobrenome,dia,mes,empresa,fantasia,cnpj,endereco,cidade,estado,cep,fone,ddd,fone1,ddd1,celular,dddcelular,celular1,dddcelular1,operadora,operadora1,situacao)values('$email','$nome','$sobrenome',$dia,$mes,'$empresa','$fantasia','$cnpj','$endereco','$cidade','$estado','$cep',
	'$telefone','$ddd','$telefone1','$ddd1','$celular','$dddcelular','$celular1','$dddcelular1','$operadora','$operadora1','$situacao')";
		
			mysql_query($sql);
		 

		 
			
		 }	 
		 
		 //***********************************************************************************************************************************
	// Método inseri email 
	//***********************************************************************************************************************************
		 

	function deleteEmail($id){

		 
			 $sql = "delete from email where idemail=".$id;
			 mysql_query($sql);
		 

		 
			
		 }	 
		 
	function consultarDeleteEmail($id){

		 
			 $sql = " select * from envio_sucesso where idemail=".$id." ";
			 $sql.= " union all select * from envio_erro where idemail=".$id;
			$resultado =  mysql_query($sql);
			 $num = mysql_num_rows($resultado);
			 if($num > 0){
				return 1;
			 }else{
				return 0;
			 }
		 
			
		 }	 	 
		 
			 //***********************************************************************************************************************************
	// Método logar 
	//***********************************************************************************************************************************
		 

	function logar($login,$senha){

		 
			 $sql = "select * from usuario where login='".$login."' and senha='".$senha."'";
			 $resultado = mysql_query($sql);
			 $num = mysql_num_rows($resultado);
		
		 
			 if($num > 0){
				return 1;
			 }else{
				return 0;
			 }

		 
			
		 }	 
		 
		 
	//***********************************************************************************************************************************
	// emails enviados 
	//***********************************************************************************************************************************
		 

		
	 
	 function inserirRemessaGrupo($remessa,$grupo){
			 
			 $sql = "insert into remessa_grupo(idremessa,idgrupo)values($remessa,$grupo)";
			 mysql_query($sql);
			
	 }	
	 
	 
	 //***********************************************************************************************************************************
	// emails enviados 
	//***********************************************************************************************************************************
		 

	function maxRemessa(){
			 
			 $sql = "select max(idremessa)maximo from remessa";
			 $resultado = mysql_query($sql);
			 while($row = mysql_fetch_object($resultado)){
			 $retorno = $row->maximo;
			 
			 }
			 return $retorno;
	 }		 
		 
		 
		 
	//***********************************************************************************************************************************
	// emails enviados sucesso
	//***********************************************************************************************************************************
		 

	function inserirEnvioSucesso($idremessa,$idemail){
	$data = date('YYYY-dd-MM H:i:s');
		 
			 $sql = "insert into envio_sucesso(idremessa,idemail,data_envio)values($idremessa,$idemail,NOW())";
			 mysql_query($sql);
			 
			
		 }	
		 
		 //***********************************************************************************************************************************
	// emails enviados erro
	//***********************************************************************************************************************************
		 

	function inserirEnvioErro($idremessa,$idemail){
	$data = date('YYYY-dd-MM H:i:s');
		 
			 $sql = "insert into envio_erro(idremessa,idemail,data_envio)values($idremessa,$idemail,NOW())";
			 mysql_query($sql);
			 
			
		 }	
		 
			 //***********************************************************************************************************************************
	// retorna remessas de emails enviados com sucesso
	//***********************************************************************************************************************************
		 

	function retornaRemessa(){

		 
			 $sql = "select idremessa,nome,data_envio from remessa";
			 $resultado = mysql_query($sql);
			 while($row = mysql_fetch_object($resultado)){
			 $retorno.="<option value=$row->idremessa>$row->nome </option>";
			 
			 }
			 
			return $retorno;
		 }	
		 
		 
		 function retornaRemessaID($id){

		 
			 $sql = "select * from remessa where idremessa=$id";
			 $resultado = mysql_query($sql);
			
			 
			return $resultado;
		 }	
		 
		 function deletarEmailErros($id){

		 
			 $sql = "delete from envio_erro where idremessa=$id";
			 $resultado = mysql_query($sql);
			
			 
			return $resultado;
		 }
		 
		 
		 
		 
		 
		 
		 
	//***********************************************************************************************************************************
	// retorna remessas de emails enviados com sucesso
	//***********************************************************************************************************************************
		 

	function retornaEmailSucesso($idremessa,$pagina,$limit){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
			if($idremessa!=0){
			 $sql = "SELECT e . * , r.assunto, r.titulo,r.nome remessa,DATE_FORMAT(s.data_envio,'%d/%m/%Y')as data,'Sucesso' as status FROM email e INNER JOIN envio_sucesso s ON ( s.idemail = e.idemail ) INNER JOIN 			                 remessa r ON ( r.idremessa = s.idremessa ) WHERE s.idremessa =$idremessa limit ".$pagina.",".$limit;
			 
			$sql.= " UNION ALL SELECT e . * , r.assunto, r.titulo,r.nome remessa,DATE_FORMAT(er.data_envio,'%d/%m/%Y')as data,'Erro' as status FROM email e INNER JOIN envio_erro er ON ( er.idemail = e.idemail ) INNER JOIN 			                 remessa r ON ( r.idremessa = er.idremessa ) WHERE er.idremessa =$idremessa limit ".$pagina.",".$limit;
			 $resultado = mysql_query($sql);
			 return $resultado;
			}
			 
			 
			 
			 
		 }		 
		 
		 
	function retornaEmailInativo($pagina,$limit){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
		
			 $sql = "SELECT e . * ,'Inativo' as status FROM email e  WHERE 
			 e.situacao=0     limit ".$pagina.",".$limit;
			 
		
			 $resultado = mysql_query($sql);
			 return $resultado;
		
			 
			 
			 
			 
		 }	 
		 
		 
	function retornaEmailErro($idremessa,$pagina,$limit){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
			if($idremessa!=0){
			$sql= " SELECT e . * , r.assunto, r.titulo,r.nome remessa,DATE_FORMAT(er.data_envio,'%d/%m/%Y')as data,'Erro' as status FROM email e INNER JOIN envio_erro er ON ( er.idemail = e.idemail ) INNER JOIN 			                 remessa r ON ( r.idremessa = er.idremessa ) WHERE er.idremessa =$idremessa limit ".$pagina.",".$limit;
			 $resultado = mysql_query($sql);
			 return $resultado;
			}
			 
			 
			 
			 
		 }		 
		 
	//***********************************************************************************************************************************
	// retorna remessas de emails enviados com sucesso
	//***********************************************************************************************************************************
		 

	function retornaQtdEmailSucesso($idremessa){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
			if($idremessa!=0){
			 $sql = " SELECT *,'Sucesso' status FROM email e INNER JOIN envio_sucesso s ON ( s.idemail = e.idemail ) WHERE s.idremessa =$idremessa ";
			 $sql.= " UNION ALL SELECT *,'Erro' status FROM email e INNER JOIN envio_erro er ON ( er.idemail = e.idemail ) WHERE er.idremessa =$idremessa ";
			 $resultado = mysql_query($sql);
			 return $resultado;
			}
			 
			 
			 
			 
		 }	
		 
	function retornaQtdEmailInativo(){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
		
			 $sql = " SELECT *,'Inativo' status FROM email e WHERE  e.situacao=0";
			 $resultado = mysql_query($sql);
			 return $resultado;
		 
			 
			 
			 
			 
		 }	 
		 
		 
	function retornaQtdEmailErro($idremessa){
			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
		
			if($idremessa!=0){
			 $sql= " SELECT *,'Erro' status FROM email e INNER JOIN envio_erro er ON ( er.idemail = e.idemail ) WHERE er.idremessa =$idremessa ";
			 $resultado = mysql_query($sql);
			 return $resultado;
			}
			 
			 
			 
			 
		 }		 	 
		 
	//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaGrupo(){

		 
			 $sql = "select * from grupo ";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 }
		 
	function retornaGrupoPorRemessa($idRemessa){

		 
			 $sql = "select * from remessa_grupo where idremessa=$idRemessa ";
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 }		 	 
		 
		 
		 function retornaGrupoId($id){

		 
			 $sql = "select * from grupo where codigo=$id ";
			 $resultado = mysql_query($sql);
			 
			  while($row = mysql_fetch_object($resultado)){
				 $retorno = $row->nome;
			 }
		
			 return $retorno;
		 
			
		 }	 

		//***********************************************************************************************************************************
	// Método retorna os emails
	//***********************************************************************************************************************************
		 

	function retornaGrupoLimit($pagina,$limit){

			if($pagina!=0){
				$pagina = $pagina * $limit ;
			}
			 
			 $sql = "select * from grupo limit ".$pagina.",".$limit;
			 $resultado = mysql_query($sql);
			 
		
			 return $resultado;
		 
			
		 }	  
		 
		 
	//***********************************************************************************************************************************
	// inserir grupos 
	//***********************************************************************************************************************************
		 

	function inserirGrupo($nome){
			
		 
			 $sql = "insert into grupo(nome)values('$nome')";
			  mysql_query($sql);
			
	 }		
	 
	 
	 
	function updateGrupo($nome,$id){
	$data = date('YYYY-dd-MM H:i:s');
		 
			 $sql = "update grupo set nome='$nome' where codigo=$id";
			 mysql_query($sql);
			 
			
		 }	
		 
		 
		 
	//***********************************************************************************************************************************
	// Método deleta grupo 
	//***********************************************************************************************************************************
		 

	function deleteGrupo($id){

		 
			 $sql = "delete from grupo where codigo=".$id;
			  mysql_query($sql);
			

		 
			
		 }	 	 
		 
		 
	//***********************************************************************************************************************************
	// Método monta grupo 
	//***********************************************************************************************************************************
		 

	function montagrupos(){

		 
			 $sql = "select * from grupo ";
			 $resultado =  mysql_query($sql);
			 $input="";
			// $input="<input name=grupo type=checkbox value=grupos> Selecione pelo mesno um grupo<br><br>";
			 while($row = mysql_fetch_object($resultado)){
				 $input.="<input name='grupos[]' type='checkbox' value='".$row->codigo."'>".$row->nome."<br>";
			 }

			return $input;
			
		 }		 	 	 



	 //***********************************************************************************************************************************
	// emails enviados 
	//***********************************************************************************************************************************
		 

	function maxEmail(){
			 
			 $sql = "select max(idemail)maximo from email";
			 $resultado = mysql_query($sql);
			 while($row = mysql_fetch_object($resultado)){
			 $retorno = $row->maximo;
			 
			 }
			 return $retorno;
	 }	
	 
	 //***********************************************************************************************************************************
	// inserir grupo
	//***********************************************************************************************************************************
		 

	function inserirGrupoEmail($idemail,$idgrupo){
		 
			 $sql = "insert into email_grupo(codigo_email,codigo_grupo)values($idemail,$idgrupo)";
			 mysql_query($sql);
			 
			
		 }



	function montagruposEmail($idEmail){

		 
			 $sql = "select * from grupo ";
			 $resultado =  mysql_query($sql);
			 $input="";
			 while($row = mysql_fetch_object($resultado)){
				$input.="<input name='grupos[]' type='checkbox'";
				$sql1 = "select * from email_grupo where codigo_grupo=".$row->codigo." and codigo_email=$idEmail ";
				$resultado1 =  mysql_query($sql1);


				while($row1 = mysql_fetch_object($resultado1)){
					 $input.=" checked=checked ";
				}

				 $input.=" value='".$row->codigo."'>".$row->nome."<br>";
			 }

			return $input;
			
		 }


	//***********************************************************************************************************************************
	// Método monta grupo 
	//***********************************************************************************************************************************



		 

	function montagruposPreenchidos($codigoGrupo,$codigoemail){

		 
			 $sql = "select * from email_grupo where codigo_grupo=$codigoGrupo and codigo_email=$codigoemail ";
			 $resultado =  mysql_query($sql);
			 $input="";

			 while($row = mysql_fetch_object($resultado)){
				 $input.="checked=checked";
			 }

			return $input;
			
	}

	//***********************************************************************************************************************************
	// Método monta grupo 
	//***********************************************************************************************************************************



		 

	function deleteGrupos($codigoemail){

		 
			 $sql = "delete from email_grupo where  codigo_email=$codigoemail ";
			 mysql_query($sql);

			
	}

	function inserirHistorico($codUsuario,$tipo_usuario,$nomeUsuario,$empresa,$operacao,$email){

		 
		   $sql = "insert into historico(cod_usuario,nome_usuario,cod_tipo_usuario,cod_empresa,data,operacao,email)
		   values($codUsuario,'$nomeUsuario',$tipo_usuario,$empresa,NOW(),'$operacao','$email')";
			 mysql_query($sql);

			
	}

	function AjustarConfiguracoes($host,$username,$password,$remetente,$mensagem){
			$sql = "update configuracoes set host='$host',username='$username',password='$password',remetente='$remetente',mensagem='$mensagem' ";
			mysql_query($sql);
	}


	function AjustarConfiguracoesLayout($layout){
			$sql = "update layout set layout='$layout' ";
			mysql_query($sql);
	}
		
	function AjustarConfiguracoesLayoutPersonalizado($layout){
			$sql = "update layoutPersonalizado set layout='$layout' ";
			mysql_query($sql);
	}	
		
	function montaConfiguracoes(){

		 
			 $sql = "select * from configuracoes ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function montaConfiguracoesLayout(){

		 
			 $sql = "select * from layout ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function montaConfiguracoesLayoutPersonalizado(){

		 
			 $sql = "select * from layoutPersonalizado ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function montaHistorico($datainicial,$datafinal){

		 
		$dia = substr($datainicial,0,2);
		$mes = substr($datainicial,3,2);
		$ano = substr($datainicial,6,4);

		
		$dia1 = substr($datafinal,0,2);
		$mes1 = substr($datafinal,3,2);
		$ano1 = substr($datafinal,6,4);

		 
			 $sql = "select nome_usuario,operacao,email,DATE_FORMAT(data,'%d/%m/%Y %H:%m:%s')as data from historico 
			 where data >= DATE_FORMAT('$ano-$mes-$dia 01:01:01','%Y-%m-%d %H:%m:%s') and data <= DATE_FORMAT('$ano1-$mes1-$dia1 23:59:00','%Y-%m-%d %H:%m:%s') order by 		         DATE_FORMAT(data,'%d/%m/%Y %H:%m:%s') ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function selectEmail($id){

		 
			 $sql = "select * from email where idemail=$id ";
			 $resultado =  mysql_query($sql);
			 $input="";

			 while($row = mysql_fetch_object($resultado)){
				 $input = $row->email;
			 }

			return $input;
			
	}
		
		
	function montaLayout(){

		 
			 $sql = "select * from layout where padrao=1 ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function montaLayoutPersonalizado(){

		 
			 $sql = "select * from layoutPersonalizado ";
			 $resultado =  mysql_query($sql);
			
			 return $resultado;
			
	}	

	function cancelarStatus($email){
			 $sql = "update email set situacao=0 where email like'$email' ";
			 $resultado =  mysql_query($sql);

	} 

	function inserirEmailLido($remessa,$email){

		 
		   $sql = "insert into email_lido(codigo_remessa,codigo_email,data)values($remessa,$email,NOW())";
		   mysql_query($sql);

	}

	function consultarEmailPorId($id){

		 
		   $sql = "select * from email where idemail=$id";
		   $resultado =  mysql_query($sql);
		   while($row = mysql_fetch_object($resultado)){
				 $input = $row->email;
		   }
			return $input;

	}

	function consultarGrupoPorId($id){

		 
		   $sql = "select * from grupo where codigo=$id";
		   $resultado =  mysql_query($sql);
		   while($row = mysql_fetch_object($resultado)){
				 $input = $row->nome;
		   }
			return $input;

	}

		
	 
	 }

	?>
