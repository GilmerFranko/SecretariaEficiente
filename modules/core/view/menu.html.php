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
          <div class="margin-r-5 center">
            <a href="<?php echo $extra->generateUrl('collective', 'view.students') ?>">
              <i class="material-icons">school</i>
              Estudiantes
            </a>
          </div>
        </div>

        <ul class="">
          <li><a class="a-icon hide-on-small-only" href="<?php echo Core::model('extra', 'core')->generateUrl('collective', 'view.students'); ?>"><i class="material-icons">home</i></a></li>

          <li>
            <div title="Notificaciones">
              <a class="a-icon hide-on-small-only"onclick="getNotifications(); return false;" href="">
                <i class="material-icons notranslate">notifications_none</i>
              </a>
            </div>
          </li>

          <li>
            <div title="Estudiantes">
              <a class="a-icon hide-on-small-only" href="<?php echo $extra->generateUrl('collective', 'view.students') ?>">
                <!--<span class="">Estudiantes</span>-->
                <i class="material-icons">school</i>
              </a>
            </div>
          </li>

          <li>
            <div title="Docentes">
              <a class="a-icon hide-on-small-only" href="<?php echo $extra->generateUrl('collective', 'view.teachers') ?>">
                <!--<span class="">Profesores</span>-->
                <i class="material-icons">person</i>
              </a>
            </div>
          </li>

          <li>
            <div title="Inscripciones">
              <a class="a-icon hide-on-small-only" href="<?php echo $extra->generateUrl('collective', 'view.enrollments') ?>">
                <!--<span class="">Inscripciones</span>-->
                <i class="material-icons">local_offer</i>
              </a>
            </div>
          </li>

          <!-- Dropdown Trigger -->
          <li>
            <div title="Periodo Académico">
              <a class="a-icon hide-on-small-only" href="<?php echo $extra->generateUrl('courses', 'view.periods') ?>">
                <!--<span class="">Periodo Estudiantil</span>-->
                <i class="material-icons">today</i>
              </a>
            </div>
          </li>

          <li>
            <div title="Materias">
              <a class="a-icon hide-on-small-only" href="#!">
                <!--<span class="">Tutores</span>-->
                <i class="material-icons">book</i>s
              </a>
            </div>
          </li>
        </ul>
        <div class="a-icon hide-on-small-only" class="left">
          <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large" ><i class="material-icons">menu</i></a>
        </div>
      </div>
    </div>
  </nav>
</header>
<style>

  .a-icon{
    width: 12.25vw;
  }
  .a-icon i{
    text-align: center;
  }
</style>
