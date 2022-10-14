<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        config.site.php                          \
 * @package     One V                                     \
 * @author      Gilmer <gilmerfranko@hotmail.com>        |
 * @copyright   (c) 2020 Gilmer Franco                  /
 *                                                       /
 *=======================================================
 *
 * @Description Configuraci�n del sitio
 *
 *
*/

// La direcci�n principal del sitio, sin slash final.
$config['base_url']     = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, -10);

// Direcci�n del sitio mediante carpetas, sin slash final.
$config['base_path']    = BG_DIR;

// Carpeta donde se alojan las im�genes del script
$config['images_url']   = $config['base_url'] . '/static/images';

// Direcci�n de avatares mediante url, sin el slash final.
$config['avatar_url']   = $config['base_url'] . '/filestore/uploads/avatar';

// Direcci�n del sitio mediante carpetas, sin el slash final.
$config['avatar_path']  = $config['base_path'] . 'filestore' . DS . 'uploads' . DS . 'avatar';

// Url donde se alojan las im�genes de los shouts
$config['images_shout_url']   = $config['base_url'] . '/filestore/uploads/shout';

// Carpeta donde se alojan las im�genes de los shouts
$config['images_shout_path']   = $config['base_path'] . 'filestore' . DS . 'uploads' . DS . 'shout';

// Url de las fotos regaladas
$config['photos_url']  = $config['base_url'] . '/filestore/uploads/photos';

// Carpeta donde se alojan las im�genes regaladas de los bots
$config['photos_path']   = $config['base_path'] . 'filestore' . DS . 'uploads' . DS . 'photos';

// Carpeta donde se alojan los archivos con correos
$config['bulkemails_path']   = $config['base_path'] . 'filestore' . DS . 'uploads' . DS . 'bulkemails';