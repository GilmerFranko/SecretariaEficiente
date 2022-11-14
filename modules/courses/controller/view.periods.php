<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\collective\controller\new.student.php     \
 * @package     One V                                     \

 * @Description Controlador principal para visualizar todos los periodos academicos
 *
 *
 */
$page['name'] = 'Periodos Academicos';
$page['code'] = 'view.periods';


$periods[] = DB('period')->getAll();
