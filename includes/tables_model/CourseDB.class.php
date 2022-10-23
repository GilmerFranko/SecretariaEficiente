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


}
