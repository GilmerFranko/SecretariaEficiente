<?php defined('SAADMIN') || exit;

/**
 * @Description Este modelo se encarga de administrar la tabla Enrollment
*/


class EnrollmentDB extends Models
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table("enrollment");
	}

}
