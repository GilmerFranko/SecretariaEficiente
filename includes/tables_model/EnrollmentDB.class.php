<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Enrollment
*/


class EnrollmentDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("enrollments");
	}

	/**
	 * Devuelve todas las incripciones
	 * aplicando uno o varios filtros
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function getAllEnrollments($data = null)
	{
		$WHERE = isset($data['period_id']) ? 'AND period_id = '. $data['period_id'] : '';
		$select = $this->db->query('SELECT * FROM `enrollments` WHERE 1 '. $WHERE);
		showlog('SELECT * FROM `enrollments` WHERE 1 '. $WHERE);
		if($select and $select->num_rows > 0)
		{
			$row = [];
			while ($periods = $select->fetch_assoc()) {
				$row[] = $periods;
			}
			return $row;
		}
		return false;

	}

}
