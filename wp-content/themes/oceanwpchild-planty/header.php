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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Police d'écriture Syne -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<div class="logoetmenuheader">
				<a href="index.php">
					<div class="logoplanty">
    					<img id="plantyimg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/PLANTY.png" alt="Logo du nom de Planty">
						<img id="vectorplantyimg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Vector.png" alt="Logo en feuille de Planty">
					</div>
				</a>
				<?php 
					/*Désactivation header généré par défaut par le thème 
			 		do_action( 'ocean_header' ); 
			 		Remplacement par wp_nav_menu*/
					wp_nav_menu([
  						'theme_location' => 'menu-header-planty',
						//Utilité de la suppression de div ?
						'container' => false,
						//Classe reportée dans le CSS du thème enfant
   						'menu_class' => 'menuheaderplanty'
					]);
			 	?>
			</div>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>