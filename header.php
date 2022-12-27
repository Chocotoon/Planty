<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html lang="fr" class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class= "customHeader">
<a href= "accueil"><img class="logo" src="http://planty.local/wp-content/uploads/2022/12/Logo-300x28.png" alt="logo"></a>
<?php
			// Menu de navigation header.
 wp_nav_menu([
	'menu' => 'Menu Principal',
	'menu_class' => 'navHeader',
	'theme_location' => 'site-header',
])
?>
</div>
