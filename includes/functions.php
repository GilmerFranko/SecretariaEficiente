<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        function.php                          \
 * @package     One V                                     \

 * @Description Archivo que contiene varias funciones intuitivas, rápidas e imprescindibles
 *
 *
*/

/**
 * Carga una clase de un modulo
 * @param  String $route Ruta
 * @return Class
 */
function loadClass(String $route)
{
	if($route = explode('/',$route))
	{
		return Core::model($route[1], $route[0]);
	}
	return false;
}

/**
 * Carga la clase relacionada a una tabla
 * @param  String $tabla Nombre de la tabla
 * @return Class
 */
function db(String $table)
{
	return LoadTable::model($table . 'DB');
}

/**
 * Muestra un texto en la consola del navegador
 * @param  string $string
 */
function showlog($string = '', $var_export = true)
{
	if($var_export)
	{
		$string = var_export($string, 1);
	}

	echo '<script>console.log(\'{'. $string .'}\')</script>';
	error_log($string);
}
