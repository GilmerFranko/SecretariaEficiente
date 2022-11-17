<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Periods
 *
*/


class PeriodDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("periods");
	}

	function __destruct()
	{

	}

	public function getPeriods()
	{
		$select = $this->db->query('SELECT `name` FROM `periods`');

		if($select and $select->num_rows > 0)
		{
			$row = '';
			while ($periods = $select->fetch_assoc()) {
				$row .= '\''.$periods['name'].'\': null,';
			}
			return $row;
		}


	}

	public function getAllPeriods()
	{
		$select = $this->db->query('SELECT * FROM `periods`');

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

	public function getPeriodId($name = null)
	{
		$result = $this->where('name','=',$name)->get();
		if($result)
		{
			return $result['id'];
		}
		return false;
	}
}
