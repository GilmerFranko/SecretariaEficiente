<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\global\controller\index.php      \
 * @package     One V                                     \
 * @author      Gilmer <gilmerfranko@hotmail.com>        |
 * @copyright   (c) 2020 Gilmer Franco                  /
 *                                                       /
 *=======================================================
 *
 * @Description Controlador de la página principal
 *
 *
 */
$page['name'] = 'Identificaci&oacute;n';
$page['code'] = 'memberLogin';
//
if( isset($_POST['login']) || isset($_POST['recoverBtn']) )
{
    if ( !empty($_POST['email']) || !empty($_POST['recover']) )
    {
        $email = strtolower( (isset($_POST['recover']) && !empty($_POST['recover']) ? $_POST['recover'] : $_POST['email']) );
        //
        $memberData = Core::model('member', 'members')->getMemberData($email);
        //
        if( is_array($memberData) )
        {
            // COMPROBAR SI ESTÁ SUSPENDIDO
            if($memberData['banned'] == 0)
            {
                // COMPROBAR QUE TENGA LA CUENTA ACTIVA
                if ($memberData['group_id'] > 0)
                {
                    // COMPROBAR SI QUIERE CAMBIAR LA CONTRASEÑA
                    if(isset($_POST['recoverBtn'], $_POST['recover']) && !empty($_POST['recover']))
                    {
                        $recover = 1;
                    }
                    else
                    {
                        // VERIFICAR CONTRASEÑA
                        if (password_verify($_POST['password'], $memberData['password']) === true)
                        {
                            // SI HA MARCADO CASILLA PARA MANTENER SESIONES ABIERTAS, OBTENER EL UUID
                            $uuid = isset($_POST['keepOpen']) && !empty($memberData['session']) ? $memberData['session'] : null;


                            // IDENTIFICAR
                            if(Core::model('access', 'members')->login($memberData['member_id'], $uuid) === true)
                            {
                                // REDIRECCIONAR A LA HOME
                                Core::model('extra', 'core')->redirectTo($config['base_url']);
                            }
                            else {
                                $message[] = array('No se pudo identificar', 'error');
                            }
                        } else {
                            $message[] = array('Credenciales incorrectas', 'error');
                        }
                    }
                } else {
                    // VALIDAR CUENTA
                    $recover = 2;
                }
            }  else {
                $message[] = array('Cuenta suspendida. Su cuenta se borrar&aacute; el ' . date('d-m-Y', $memberData['banned']+60*60*24*30 ), 'error');
            }
        } else {
            $message[] = array('El usuario no existe', 'error');
        }
    } else {
        $message[] = array('Campos vac&iacute;os', 'error');
    }

    // COMPROBAR SI HAY QUE ENVIAR EMAIL
    if(isset($recover))
    {
        $type = $recover == 1 ? 'password' : 'welcome';

        // GENERAR IDENTIFICADOR
        $hash = Core::model('access', 'members')->setRecover($memberData['member_id'], $memberData['email'], $recover);
        // SI SE HA GENERADO
        if(!empty($hash))
        {
            /*QUERIDO PROGRAMADOR
            *ESTE SCRIPT YA A SIDO MIDIFICADO AL ORIGINAL
            *SE HAN AGREGADO TROZOS DE CODIGO DE recover.php
            *PARA ENTENDER LOS CAMBIOS PORFAVOR REVISAR EL SCRIPT ORIGINAL
            */
            // GENERAR CONTRASEÑA ALEATORIA
            $password = Core::model('extra', 'core')->generateUUID(10);

            // ACTUALIZAR CONTRASEÑA DE USUARIO
            $passwordKey = password_hash($password, PASSWORD_DEFAULT);

            // VALIDAR CUENTA DE USUARIO
            $updated = Core::model('account', 'members')->setMemberInput($passwordKey, 'password', $memberData['member_id']);
            if($updated == true)
            {
                // ENVIAR NUEVA CONTRASEÑA AL USUARIO
                $email = Core::model('email', 'core')->sendEmail( 'newpassword', $memberData['email'], array('name' => $memberData['name'], 'password' => $password) );
                if($email == true)
                {
                    $message[] = array('Te hemos enviado por email la nueva contrase&ntilde;a por favor verifica tambien en la carpeta spam de tu correo', 'success');
                }
                else
                {
                    $message[] = array('No hemos podido enviarte un email con la nueva contrase&ntilde;a, intentalo mas tarde');
                }
            }
            else
            {
                $message[] = array('No se ha podido actualizar la contrase&ntilde;a', 'error');
            }
        } else {
            // SI NO SE HA GENERADO UN HASH
            $message[] = array('No se ha podido registrar la recuperaci&oacute;n', 'error');
        }
    }
    // RECUPERAR EMAIL
    elseif( !empty($_POST['recoverEmail']) && !empty($_POST['recoverEmailPass']) )
    {
        // VACIAR MENSAJES ANTERIORES
        unset($message);

        // BUSCAR USUARIOS CON ESE NOMBRE
        $username = strtolower($_POST['recoverEmail']);
        $email = Core::model('access', 'members')->searchEmail($username, $_POST['recoverEmailPass']);
        if($email !== false)
        {
            // ESTABLECER MENSAJE EN LA SESION
            $message[] = array('Tu correo es: ' . $email, 'success');
            Core::model('extra', 'core')->setToast($message);
            // REDIGIRIR AL LOGIN CON SU EMAIL
            Core::model('extra', 'core')->generateUrl('members', 'login', null, array('email' => $email), true);
        }
        else
        {
            // MENSAJE DE ERROR
            $message[] = array('Email no encontrado', 'success');
        }
    }

    // ESTABLECER MENSAJE EN LA SESION
    Core::model('extra', 'core')->setToast($message);
}
if ($_POST['welcomeChat']) {
    $email=$_POST['email'];
    $name=$_POST['name'];
    $email = Core::model('email', 'core')->sendEmail( 'welcomechat', $email, array('name' =>$name) );
}