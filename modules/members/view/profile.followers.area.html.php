<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\members\view\profile.html.php    \
 * @package     One V                                     \
 * @author      Gilmer <gilmerfranko@hotmail.com>        |
 * @copyright   (c) 2020 Gilmer Franco                  /
 *                                                       /
 *=======================================================
 *
 * @Description Vista del �rea "Seguidores" de la secci�n "Perfil"
 *
 *
*/
?>
<ul class="collection">
	<?php if(isset($followers) && !empty($followers)) {
		while( $member = $followers->fetch_assoc() ) { ?>
	<a href="<?php echo Core::model('extra', 'core')->generateUrl( 'members', 'profile', NULL, array('user' => $member['member_id']) ); ?>">
    	<li class="collection-item avatar">
	      <img src="<?php echo $member['pp_thumb_photo']; ?>" alt="Avatar" class="circle">
	      <span class="title"><?php echo $member['name']; ?></span>
	      <p><?php echo $member['pp_full_name']; ?></p>
	      <a href="#" class="secondary-content"><i class="material-icons">account_circle</i></a>
	    </li>
	</a>
	<?php }
} else { echo '<blockquote class="flow-text">No tiene seguidores</blockquote>'; } ?>
</ul>