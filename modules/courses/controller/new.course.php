<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\collective\controller\new.student.php     \
 * @package     One V                                     \
 * @author      Gilmer <gilmerfranko@hotmail.com>        |
 * @copyright   (c) 2020 Gilmer Franco                  /
 *                                                       /
 *=======================================================
 *
 * @Description Controlador principal para agregar nuevos estudiantes
 *
 *
 */
$page['name'] = 'Agrega una nueva asignatura';
$page['code'] = 'new.course';


if(isset($_GET['new-course']))
{
	$data    = array(
		'name'   => $_POST['name'],
		'status' => $_POST['status'],
		'level'  => $_POST['level'],
	);
	/* Comprobar que no exista ya esta asignatura en la bd */
	if(db('course')->where('name','=', $data['name'])->get(1) == 0)
	{
		if(db('course')->simpleInsert($data))
		{
			$message[] = array('Asignatura Agregada');
		}


		else
		{
			$message[] = array('Error al agregar la asignatura');
		}
	}
	else
	{
		$message[] = array('La asignatura ya se encuentra registrada!');
	}

	$extra->setToast($message);
}
$course = (object)array(
	'name' => 'Matematicas',
	'status' => 'Activo',
);
