<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        sidenav.html.php                         \
 * @package     One V                                     \

 * @Description Archivo que incluye el ménú lateral
 *
 *
*/
?>

<ul id="slide-out" class="sidenav">
  <li>
    <div class="user-view">
      <div class="avatar-img">
        <img src="<?php echo BG_IMAGES . 'default-avatar.png' ?>">
      </div>
      <a href="#name"><span class="black-text name"><?php echo $session->memberData['name'] ?></span></a>
      <a href="#email"><span class="black-text email">jdandturk@gmail.com</span></a>
    </div>
  </li>
  <li>
    <a href="#!"><i class="material-icons">home</i>Principal</a>
  </li>
  <li class="divider" tabindex="-1"></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header"><i class="material-icons">account_balance</i>Colectivo</a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="<?php echo $extra->generateUrl('collective', 'view.students') ?>">
                <i class="material-icons">school</i>
                Estudiantes
              </a>
            </li>
            <li>
              <a href="<?php echo $extra->generateUrl('collective', 'new.teacher') ?>">
                <i class="material-icons">person</i>
                Profesores
              </a>
            </li>
            <li>
              <a href="<?php echo $extra->generateUrl('collective', 'view.enrollments') ?>">
                <i class="material-icons">local_offer</i>
                Inscripciones
              </a>
            </li>
            <li>
              <a href="<?php echo $extra->generateUrl('collective', 'view.periods') ?>">
                <i class="material-icons">timelapse</i>
                Periodo Estudiantil
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="material-icons">person</i>
                Tutores
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
