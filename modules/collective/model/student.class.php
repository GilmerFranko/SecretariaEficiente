<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\global\model\student.class.php    \
 * @package     One V                                     \

 * @Description Este modelo se encarga de registrar/eliminar/solicitar datos de estudiantes
 *
 *
*/

class Student extends Model
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

		$insert = $this->db->query('INSERT INTO `students`(`dni`, `passport`, `names`, `surnames`, `email`, `num_phone`, `gender`, `birth`, `birth_place`, `state`, `country`, `estatura`, `tutor_id`, `address`, `date`, `status`) VALUES (
			\''. $this->db->real_escape_string($data['dni']) .'\',
			\''. $this->db->real_escape_string($data['passport']) .'\',
			\''. $this->db->real_escape_string($data['names']) .'\',
			\''. $this->db->real_escape_string($data['surnames']) .'\',
			\''. $this->db->real_escape_string($data['email']) .'\',
			\''. $this->db->real_escape_string($data['num_phone']) .'\',
			\''. $this->db->real_escape_string($data['gender']) .'\',
			\''. $this->db->real_escape_string($data['birth']) .'\',
			\''. $this->db->real_escape_string($data['birth_place']) .'\',
			\''. $this->db->real_escape_string($data['state']) .'\',
			\''. $this->db->real_escape_string($data['country']) .'\',
			\''. ' ' .'\',
			\''. $this->db->real_escape_string($data['tutor_id']) .'\',
			\''. $this->db->real_escape_string($data['address']) .'\',
			\''. time() .'\',
			\''. $this->db->real_escape_string($data['status']) .'\'
		)');

		if($insert)
		{
			return true;
		}
		return false;
	}

	public function getStudents()
	{
		$select = $this->db->query('SELECT * FROM `students`');

		if($select and $select->num_rows > 0)
		{
			$row = [];
			while ($students = $select->fetch_assoc()) {
				$row[] = $students;
			}
			return $row;
		}
	}
}
