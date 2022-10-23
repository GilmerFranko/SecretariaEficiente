<?php defined('SAADMIN') || exit;

/**
 * @Description Controlador principal para ver matriculas
 */
$page['name'] = 'Matriculas';
$page['code'] = 'view.enrollment';



if(isset($_POST['ajax']))
{

}
else
{
	$periods = db('period')->getPeriods();
	$courses = db('course')->getCourseName();

}
