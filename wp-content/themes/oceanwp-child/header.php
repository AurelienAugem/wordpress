<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

		<nav class="display-header">
			
				<a class="logo-card" href="http://localhost/wordpress/">
					<img src="http://localhost/wordpress/wp-content/uploads/2023/05/Logo-1.png" alt="Logo de Planty">
				</a>			
				<?php wp_nav_menu( array('theme_location' => 'menu-header'));?>
				<a href="http://localhost/wordpress/commander/"  id="header-main-button" >Commander</a>
					
		</nav>

		<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

	<?php do_action( 'ocean_page_header' ); ?>
