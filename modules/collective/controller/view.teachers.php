<?php defined('SAADMIN') || exit;

/**
 * @Description Controlador principal para visualizar todos los docentes
 */
$page['name'] = 'Docentes';
$page['code'] = 'view.teachers';


$teachers[] = DB('teacher')->getAll();
