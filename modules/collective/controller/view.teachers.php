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
$page['name'] = 'Profesores';
$page['code'] = 'view.teachers';


$teachers = db('teacher')->getLastRow(10);

