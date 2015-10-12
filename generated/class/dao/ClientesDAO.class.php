<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-16 00:57
 */
interface ClientesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Clientes 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param cliente primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Clientes cliente
 	 */
	public function insert($cliente);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Clientes cliente
 	 */
	public function update($cliente);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNome($value);

	public function queryBySobrenome($value);

	public function queryByEmail($value);

	public function queryBySenha($value);

	public function queryByAtivo($value);


	public function deleteByNome($value);

	public function deleteBySobrenome($value);

	public function deleteByEmail($value);

	public function deleteBySenha($value);

	public function deleteByAtivo($value);


}
?>