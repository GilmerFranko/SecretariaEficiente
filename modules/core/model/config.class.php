<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\core\model\config.class.php       \
 * @package     One V                                     \

 * @Description Este modelo retorna la configuración desde la base de datos
 *
 *
*/

class Config extends Model
{
    public function getConfig()
    {
        return $this->config;
    }

    public function get($key = null){
    	return $this->config[$key];
    }

    public function set($key = null, $val = null){
    	$this->config[$key] = $val;
    }
}
