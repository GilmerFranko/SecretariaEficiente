<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\collective\controller\new.student.php     \
 * @package     One V                                     \

 * @Description Controlador principal para agregar nuevo periodo académico
 *
 *
 */
$page['name'] = 'Agrega un nuevo periodo académico';
$page['code'] = 'new.period';


if(isset($_GET['new-period']))
{
	try {
		$data    = array(
			'date_start' => $_POST['date_start'],
			'date_end'   => $_POST['date_end'],
			'name'       => date('Y', strtotime($_POST['date_start'])) . '-' . date('Y', strtotime($_POST['date_end'])),
		);
	} catch (Exception $e) {
		error_log($e);
		exit;
	}


	/* Comprobar que no exista ya esta asignatura en la bd */
	if(db('period')->where('name','=', $data['name'])->get(1) == 0)
	{
		if(db('period')->simpleInsert($data))
		{
			$message[] = array('Periodo academico agregado');
		}


		else
		{
			$message[] = array('Error al agregar el periodo academico');
		}
	}
	else
	{
		$message[] = array('Este periodo academico ya se encuentra registrado!');
	}

	$extra->setToast($message);
}
