<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        menu.html.php                            \
 * @package     One V                                     \

 * @Description Archivo que incluye parte de la cabecera
 *
 *
*/
?>
<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta charset="UTF-8">
  <!-- menu desplegable -->
  <ul id="userOptions" class="dropdown-content">
    <li><a href="#">Perfil</a></li>
    <li><a href="#">Salir</a></li>
  </ul>
  <!--/menu desplegable -->
  <nav class="nav-fixed blue darken-3">
    <div>
      <div class="nav-wrapper">
        <!-- IZQUIERDA -->
        <div class="left">

          <div class="margin-r-5 center">
            <h5><a class="" target="_blank" href=""/><?php echo $config['script_name']; ?></a></h5>
          </div>
        </div>

        <ul class="right ">
          <li><a class="" href="<?php echo Core::model('extra', 'core')->generateUrl('collective', 'view.students'); ?>"><i class="material-icons">home</i></a></li>


          <!--<li><a onclick="getNotifications(); return false;" href=""><i class="material-icons notranslate">notifications_none</i></a></li>
          <li><a href="" title="Buscar personas"><i class="material-icons notranslate">search</i></a></li>
          <li><a href="" title="Contacto"><i class="material-icons notranslate">contact_mail</i></a></li>
          <li><a href="" title="Preguntas Frecuentes"><i class="material-icons notranslate">live_help</i></a></li>
          <!-- Dropdown Trigger -->
          <li>
            <a class="dropdown-trigger" href="#!" data-target="userOptions" title="Perfil">
              <i class="material-icons">settings</i><i class="material-icons right notranslate">arrow_drop_down</i>
            </a>
          </li>
        </ul>
        <div class="left">
          <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large" ><i class="material-icons">menu</i></a>
        </div>
      </div>
    </div>
  </nav>

</header>
<style>
  @media screen and (max-width: 640px){
    nav a.left, nav a.right{
      width: 50%;
    }
  }
</style>
