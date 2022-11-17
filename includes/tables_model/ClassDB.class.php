<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Periods
 *
*/


class ClassDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("classes");
	}



	/**
	 * Devuelve todas las incripciones
	 * aplicando uno o varios filtros
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function getAllClasses($data = null)
	{
		$WHERE = isset($data['period_id']) ? 'AND period_id = '. $data['period_id'] : '';
		$select = $this->db->query('SELECT * FROM `classes` WHERE 1 '. $WHERE);

		if($select and $select->num_rows > 0)
		{
			$row = [];
			while ($class = $select->fetch_assoc()) {
				$row[] = $class;
			}
			return $row;
		}
		return false;

	}
}
