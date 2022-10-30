<?php defined('SAADMIN') || exit;

/**
 *-------------------------------------------------------/
 * @file        modules\core\view\index.html.php         \
 * @package     One V                                     \

 * @Description Vista de la página principal
 *
 *
*/

require Core::view('head', 'core');
?>

<!-- Header -->
<?php require Core::view('menu', 'core'); ?>
<!-- / Header -->

<!-- Body -->
<section id="<?php echo $page['code']; ?>">

</section>
<!-- / Body -->

<!-- Footer -->
<?php require Core::view('footer', 'core');?>
<!-- / Footer -->
