<?php
	/**
	 * This file is for site branding
	 *
	 * @since 1.0
	 * @package Prothom
	 */
?>
<div class="site-branding">
	<?php
		the_custom_logo();
	if ( is_front_page() && is_home() ) : ?>
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
