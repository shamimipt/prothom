<?php
/**
 * This is main header file of theme
 *
 * @since 1.0
 * @package Prothom
 */

?>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="prothom-main-header-wrapper">
				<!-- site branding -->
				<?php get_template_part('template-parts/header/site-brands'); ?>

				<!-- site navs -->
				<?php get_template_part('template-parts/header/site-navs'); ?>
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
