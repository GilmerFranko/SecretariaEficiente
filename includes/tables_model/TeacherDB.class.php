<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Teachers
 *
*/


class TeacherDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("teachers");
	}


}
