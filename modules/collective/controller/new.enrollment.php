<?php defined('SAADMIN') || exit;

/**
 * @Description Controlador principal para agregar matriculas
 */
$page['name'] = 'Agrega nueva matricula';
$page['code'] = 'new.enrollment';



if(isset($_POST['ajax']))
{
	// Solicitud. Devuelve nombre de estudiante mediante un DNI
	if(isset($_GET['getNameStudent']))
	{
		/* Obtiene el nombre */
		$name = db('student')->where('dni','=',$_POST['dni'])->select('names')->get();

		if($name)
		{
			echo $name['names'];
		}
		else
		{
			echo 0;
		}
	}

}
else
{
	if(isset($_GET['new-enrollment']))
	{
		$period = db('period')->where('name','=',$_POST['period'])->get();
		$student = db('student')->where('dni','=',$_POST['dni'])->get();
		if($period)
		{
			if($student)
			{
				$data = array(
					'student_id' => $student['id'],
					'period_id'   => $period['id'],
					'class_id' => 'A',
				);
				if(db('enrollment')->simpleInsert($data))
				{
					$message[] = array('Matricula agregada');
				}
				else
				{
					$message[] = array('Matricula no agregada');
				}
			}
			else
			{
				$message[] = array('Estudiante no encontrado');
			}
		}
		else
		{
			$message[] = array('Periodo escolar no encontrado');
		}
		$extra->setToast($message);
	}

	$periods = db('period')->getPeriods();
	$courses = db('course')->getCourseName();

}
