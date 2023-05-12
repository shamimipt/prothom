<?php
	/**
	 * Main Navigation File
	 *
	 * @since 1.0
	 * @package Prothom
	 */
?>

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
