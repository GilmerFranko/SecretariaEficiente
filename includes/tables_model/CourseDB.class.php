<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Courses
 *
*/


class CourseDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("courses");
	}

	public function getCourseName()
	{
		$select = $this->db->query('SELECT `name` FROM `courses`');

		if($select and $select->num_rows > 0)
		{
			$row = '';
			while ($class = $select->fetch_assoc()) {
				$row .= '\''.$class['name'].'\': null,';
			}
			return $row;
		}
	}

}
