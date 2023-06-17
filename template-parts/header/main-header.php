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

				<!-- site navs -->
				<?php get_template_part( 'template-parts/header/offcanvas-nav' ); ?>
			</div>
		</div>
	</header><!-- #masthead -->
