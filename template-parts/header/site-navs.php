<?php
/**
 * Main Navigation File
 *
 * @since 1.0
 * @package Prothom
 */
?>
<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
	<nav id="site-navigation" class="main-navigation prothom-main-menu d-none d-lg-flex">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'menu-1',
				'menu_class'      => 'primary-menu sf-menu',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php else :
	printf( '<div class="flex-grow-1 has-text-align-right">%1$s</div>', 'Please Add Menu From Admin Panel' ); ?>
<?php endif; ?>
