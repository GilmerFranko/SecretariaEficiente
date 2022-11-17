<?php defined('SAADMIN') || exit;

/**
 *-----------------------------------------------------------
 * @file        modules\global\model\representative.class.php
 * @package     One V
 * @author      Gilmer <gilmerfranko@hotmail.com>
 * @copyright   (c) 2020 Gilmer Franco
 *
 *===========================================================
 *
 * @Description Este modelo se encarga de registrar/eliminar/solicitar datos de estudiantes
 *
 *
*/

class Teacher extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function __destruct()
	{

	}

	/**
	* @param  Array
	* @return boolean
	*/
	public function newStudent($data = Array())
	{
	}

}
