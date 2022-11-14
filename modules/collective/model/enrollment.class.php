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

class Enrollment extends Model
{
	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * Devuelve Todas las incripciones
	 * @param
	 * @return [type]
	 */
	public function getEnrollment()
	{
		$data = [];
		$enrollment[0] = DB('enrollment')->getAll();
		foreach ($enrollment as $value)
		{
			$enrollment[0]['student'] = DB('student')->where('id', '=', $value['student_id'])->get();
			$data[] = $enrollment;
		}
		return $data[0];
	}
}
