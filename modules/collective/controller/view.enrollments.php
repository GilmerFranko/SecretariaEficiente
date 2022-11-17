<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\collective\controller\new.student.php     \
 * @package     One V                                     \

 * @Description Vista principal para ver estudiantes
 *
 *
 */
$page['name'] = 'Inscripciones';
$page['code'] = 'view.enrollments';


/**
 * Optiene todos los periodos existentes
 * @var [type]
 */
if(!$periods = DB('period')->getAllPeriods())
{
	$periods = [];
}

$filter_name = 'Todas las inscripciones';

/**
 * Filtro de busqueda de inscripciones
 * @var string
 */
if(isset($_GET['filter_period']) AND !empty($_GET['filter_period']) AND $_GET['filter_period'] != "null"){
	$filter_period['data'] = $_GET['filter_period'];
	$filter_period['status'] = true;
}
else
{
	$filter_period['data'] = null;
	$filter_period['status'] = false;
}

$filter_data = array(
	'filter_period' => $filter_period['data'],
);


if(!$enrollments = loadClass('collective/enrollment')->getEnrollment($filter_data))
{
	$enrollments = [];
}

showlog(var_export($enrollments, 1));



