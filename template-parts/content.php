<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Prothom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				prothom_posted_on();
				prothom_posted_by();
				prothom_entry_meta();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php prothom_post_thumbnail(); ?>

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prothom' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php if ( ! is_singular() ) { ?>
		<div class="entry-footer readMoreButton">
			<a href="<?php the_permalink(); ?>">
				<span><?php esc_html_e( 'Read More', 'prothom' ); ?>
				</span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	<?php } ?>
</article><!-- #post-<?php the_ID(); ?> -->
