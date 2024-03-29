<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @since 1.0.0
 * @package Prothom
 */

get_header();
?>
	<div class="prothom-row site-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<main id="primary" class="site-main">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content/content', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
