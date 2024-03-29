<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 1.0
 * @package Prothom
 */

do_action( 'prothom_before_footer' );
?>
	<footer id="colophon" class="site-footer text-center">
		<div class="container">
			<div class="row">
				<div class="site-info prothom-footer-wrapper">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'prothom' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'prothom' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'prothom' ), 'Prothom', '<a href="https://github.com/shamimipt">Khondokar Shamim</a>' );
					?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<?php do_action( 'prothom_after_footer' ); ?>
</div><!-- #page -->
<?php
do_action( 'prothom_after_page' );
wp_footer(); ?>

</body>
</html>
