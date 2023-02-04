<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prothom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prothom' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="prothom-main-header-wrapper">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					else :
						?>
						<p class="site-title prothom-singular-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;
					$prothom_description = get_bloginfo( 'description', 'display' );
					if ( $prothom_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $prothom_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation prothom-main-menu d-none d-lg-flex">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<a href="javascript:void(0)" id="mobile-button-open" class="prothom-mobile-menu-toggle d-block d-lg-none" role="button" >Open</a>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="prothom-mobile-menu-wrapper">
		<div  id= "mobile-toggle-menu" class="prothom-mobile-menu d-block d-lg-none" >
			<a href="javascript:void(0)" id="mobile-button-close" class="close-button" role="button">Close</a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</div>
	</div>
