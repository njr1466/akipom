<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AdminDAO
	 */
	public static function getAdminDAO(){
		return new AdminMySqlExtDAO();
	}

	/**
	 * @return BairrosDAO
	 */
	public static function getBairrosDAO(){
		return new BairrosMySqlExtDAO();
	}

	/**
	 * @return BannercentralDAO
	 */
	public static function getBannercentralDAO(){
		return new BannercentralMySqlExtDAO();
	}

	/**
	 * @return BannerinferiorDAO
	 */
	public static function getBannerinferiorDAO(){
		return new BannerinferiorMySqlExtDAO();
	}

	/**
	 * @return BannersuperiorDAO
	 */
	public static function getBannersuperiorDAO(){
		return new BannersuperiorMySqlExtDAO();
	}

	/**
	 * @return CategoriadestaqueDAO
	 */
	public static function getCategoriadestaqueDAO(){
		return new CategoriadestaqueMySqlExtDAO();
	}

	/**
	 * @return CategoriasDAO
	 */
	public static function getCategoriasDAO(){
		return new CategoriasMySqlExtDAO();
	}

	/**
	 * @return CidadesDAO
	 */
	public static function getCidadesDAO(){
		return new CidadesMySqlExtDAO();
	}

	/**
	 * @return CuponsDAO
	 */
	public static function getCuponsDAO(){
		return new CuponsMySqlExtDAO();
	}

	/**
	 * @return EmpresasDAO
	 */
	public static function getEmpresasDAO(){
		return new EmpresasMySqlExtDAO();
	}

	/**
	 * @return OfertasDAO
	 */
	public static function getOfertasDAO(){
		return new OfertasMySqlExtDAO();
	}

	/**
	 * @return UsuariosDAO
	 */
	public static function getUsuariosDAO(){
		return new UsuariosMySqlExtDAO();
	}


}
?>