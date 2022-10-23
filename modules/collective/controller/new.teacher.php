<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------
 * @file        modules\collective\controller\new.student.php
 * @package     One V
 * @author      Gilmer <gilmerfranko@hotmail.com>
 * @copyright   (c) 2020 Gilmer Franco
 *
 *=======================================================
 *
 * @Description Controlador principal para agregar nuevos docentes
 *
 *
 */
$page['name'] = 'Agrega nuevo estudiante';
$page['code'] = 'new.teacher';


/* Registra un nuevo docente */
if(isset($_GET['new-teacher']))
{
	$data = array(
		'dni'         => $_POST['dni'],
		'names'       => $_POST['names'],
		'surnames'    => $_POST['surnames'],
		'designation' => $_POST['designation'],
		'dob' 				=> $_POST['dob'],
		'email'       => $_POST['email'],
		'num_phone'   => $_POST['num_phone'],
		'gender'      => $_POST['gender'],
		'dob'       	=> $_POST['dob'],
		'address'    	=> $_POST['address'],
		'jod'    			=> $_POST['jod'],
		'status'      => 1,
	);
	echo db('teacher')->simpleInsert($data	);
	//loadClass('collective/teacher')->newStudent($data);
}

$teachers = array(
	array(
		'dni'         => '28542820',
		'names'       => 'Gilmer Antonio',
		'surnames'    => 'Franco Moreno',
		'designation' => 'Docente',
		'dob'    			=> '21/11/2001',
		'email'       => 'Gil28542820@gmail.com',
		'num_phone'   => '04168367658',
		'gender'      => '0',
		'birth'       => '1111',
		'address'    	=> '1111',
		'jod'    			=> '1111',
		'status'      => 1,
	)
);

$teacher = $teachers[0]; $teacher = (object)$teacher;
