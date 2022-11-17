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
	function __destruct()
	{

	}

}
