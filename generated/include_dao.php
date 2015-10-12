<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AdminDAO.class.php');
	require_once('class/dto/Admin.class.php');
	require_once('class/mysql/AdminMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminMySqlExtDAO.class.php');
	require_once('class/dao/BairrosDAO.class.php');
	require_once('class/dto/Bairro.class.php');
	require_once('class/mysql/BairrosMySqlDAO.class.php');
	require_once('class/mysql/ext/BairrosMySqlExtDAO.class.php');
	require_once('class/dao/BannercentralDAO.class.php');
	require_once('class/dto/Bannercentral.class.php');
	require_once('class/mysql/BannercentralMySqlDAO.class.php');
	require_once('class/mysql/ext/BannercentralMySqlExtDAO.class.php');
	require_once('class/dao/BannerinferiorDAO.class.php');
	require_once('class/dto/Bannerinferior.class.php');
	require_once('class/mysql/BannerinferiorMySqlDAO.class.php');
	require_once('class/mysql/ext/BannerinferiorMySqlExtDAO.class.php');
	require_once('class/dao/BannersuperiorDAO.class.php');
	require_once('class/dto/Bannersuperior.class.php');
	require_once('class/mysql/BannersuperiorMySqlDAO.class.php');
	require_once('class/mysql/ext/BannersuperiorMySqlExtDAO.class.php');
	require_once('class/dao/CategoriadestaqueDAO.class.php');
	require_once('class/dto/Categoriadestaque.class.php');
	require_once('class/mysql/CategoriadestaqueMySqlDAO.class.php');
	require_once('class/mysql/ext/CategoriadestaqueMySqlExtDAO.class.php');
	require_once('class/dao/CategoriasDAO.class.php');
	require_once('class/dto/Categoria.class.php');
	require_once('class/mysql/CategoriasMySqlDAO.class.php');
	require_once('class/mysql/ext/CategoriasMySqlExtDAO.class.php');
	require_once('class/dao/CidadesDAO.class.php');
	require_once('class/dto/Cidade.class.php');
	require_once('class/mysql/CidadesMySqlDAO.class.php');
	require_once('class/mysql/ext/CidadesMySqlExtDAO.class.php');
	require_once('class/dao/CuponsDAO.class.php');
	require_once('class/dto/Cupon.class.php');
	require_once('class/mysql/CuponsMySqlDAO.class.php');
	require_once('class/mysql/ext/CuponsMySqlExtDAO.class.php');
	require_once('class/dao/EmpresasDAO.class.php');
	require_once('class/dto/Empresa.class.php');
	require_once('class/mysql/EmpresasMySqlDAO.class.php');
	require_once('class/mysql/ext/EmpresasMySqlExtDAO.class.php');
	require_once('class/dao/OfertasDAO.class.php');
	require_once('class/dto/Oferta.class.php');
	require_once('class/mysql/OfertasMySqlDAO.class.php');
	require_once('class/mysql/ext/OfertasMySqlExtDAO.class.php');
	require_once('class/dao/UsuariosDAO.class.php');
	require_once('class/dto/Usuario.class.php');
	require_once('class/mysql/UsuariosMySqlDAO.class.php');
	require_once('class/mysql/ext/UsuariosMySqlExtDAO.class.php');

?>