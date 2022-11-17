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


	function __destruct()
	{

	}


	/**
	 * Devuelve Todas las incripciones
	 * @param
	 * @return [type]
	 */
	public function getEnrollment($filter_data = null)
	{
		$where = array();

		if(isset($filter_data['filter_period']))
		{
			$where['period_id'] = $filter_data['filter_period'];
		}

		$row = [];

		if($enrollment = DB('enrollment')->getAllEnrollments($where))
		{
			foreach ($enrollment as $value)
			{
				$enrollment[0]['student'] = DB('student')->where('id', '=', $value['student_id'])->get();
				$enrollment[0]['period'] = DB('period')->where('id', '=', $value['period_id'])->get();
				$row[] = $enrollment[0];
			}
			return $row;
		}
		return false;
	}
}
