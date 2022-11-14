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

$level = (isset($_GET['level']) and !empty($_GET['level'])) ? $_GET['level'] : 1;

$enrollments = loadClass('collective/enrollment')->getEnrollment();

