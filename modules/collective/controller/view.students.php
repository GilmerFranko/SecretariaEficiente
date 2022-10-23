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
 * @Description Vista principal para ver estudiantes
 *
 *
 */
$page['name'] = 'Estudiantes';
$page['code'] = 'view.course';

$level = (isset($_GET['level']) and !empty($_GET['level'])) ? $_GET['level'] : 1;

$students = loadClass('collective/student')->getStudents();
