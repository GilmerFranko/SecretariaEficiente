<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\collective\controller\new.student.php     \
 * @package     One V                                     \

 * @Description Controlador principal para agregar nuevos estudiantes
 *
 *
 */
$page['name'] = 'Agrega nuevo estudiante';
$page['code'] = 'new.student';


/* Registra un nuevo estudiante */
if(isset($_GET['new-student']))
{
	$data = array(
		'dni'         => $_POST['dni'],
		'passport'    => $_POST['passport'],
		'names'       => $_POST['names'],
		'surnames'    => $_POST['surnames'],
		'email'       => $_POST['email'],
		'num_phone'   => $_POST['num_phone'],
		'gender'      => $_POST['gender'],
		'birth'       => $_POST['birth'],
		'birth_place' => '',
		'state'       => $_POST['state'],
		'country'     => $_POST['country'],
		'tutor_id'    => DB('tutor')->getTutor($_POST['tutor_id']),
		'address'     => $_POST['address'],
		'status'      => 1,
	);
	if(DB('student')->where('dni', '=', $data['dni'])->numRows() == 0)
	{
		if(loadClass('collective/student')->newStudent($data))
		{
			$message[] = array('Estudiante Agregado');
		}
		else
		{
			$message[] = array('No se pudo agregadar el estudiante');
		}

	}
	else
	{
		$message[] = array('Ya se encuentra agregado un estudiante con el mismo DNI');
	}
	$extra->setToast($message);
}

$students = array(
	array(
		'dni'         => '28542820',
		'passport'    => '',
		'names'       => 'Gilmer Antonio',
		'surnames'    => 'Franco Moreno',
		'email'       => 'gilmerfranko@saadmin.com',
		'num_phone'   => '04168367620',
		'gender'      => '0',
		'birth'       => '21/11/2001',
		'birth_place' => 'Valera',
		'state'       => 'Merida',
		'country'     => 'Venezuela',
		'tutor_id'    => 'Maria Moreno',
		'address'     => 'address Amarilla',
		'status'      => '1',
	)
);

$student = $students[0]; $student = (object)$student;
