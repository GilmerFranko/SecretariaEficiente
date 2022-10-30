<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\members\controller\account.php      \
 * @package     One V                                     \

 * @Description Controlador principal de la cuenta
 *
 *
 */

$page['name'] = 'Mi cuenta';
$page['code'] = 'memberAccount';
//

if (isset($_POST['saveAccount']))
{
    // Inicializar variable
	$message = array();

    // ACTUALIZAR AVATAR
	include Core::controller('account.avatar');

    // ACTUALIZAR CORREO ELECTRONICO Y PASSWORD
	include Core::controller('account.security');

    // ACTUALIZAR PERFIL
	include Core::controller('account.profile');
}
else
{
	$message[] = ''
}

// ESTABLECER MENSAJE EN LA SESION
$extra->setToast($message);

// REDIRECCIONAR AL PERFIL
Core::model('extra', 'core')->redirectTo(Core::model('extra', 'core')->generateUrl('members', 'profile', NULL, array('user' => $session->memberData['member_id'])) . '&save=' . $message[0][1]);
