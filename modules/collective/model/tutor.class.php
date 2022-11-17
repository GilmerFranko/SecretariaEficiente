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

class Tutor extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function __destruct()
	{

	}

	/**
	 * Devuelve un Tutor
	 * @param  Tutor (Nombre/Cedula/ID)
	 * @return [type]
	 */
	public function getTutor($tutor = null)
	{
		return DB('tutor')->getTutor();
	}
}
