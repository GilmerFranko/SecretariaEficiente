<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        sidenav.html.php                         \
 * @package     One V                                     \
 * @author      Gilmer <gilmerfranko@hotmail.com>        |
 * @copyright   (c) 2020 Gilmer Franco                  /
 *                                                       /
 *=======================================================
 *
 * @Description Archivo que incluye el ménú lateral
 *
 *
*/
?>

<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="images/office.jpg">
    </div>
    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
    <a href="#name"><span class="white-text name">John Doe</span></a>
    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">home</i>Principal</a></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Colectivo<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">Estudiantes</a></li>
            <li><a href="#!">Profesores</a></li>
            <li><a href="#!">Tutores</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>

</ul>
