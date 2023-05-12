<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since 1.0
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
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content/content', 'excerpt' );

							endwhile;

						prothom_the_post_pagination();

						else :

							get_template_part( 'template-parts/content/content', 'none' );

						endif;
						?>

					</main><!-- #main -->
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
