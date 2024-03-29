<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @since 1.0
 * @package Prothom
 */

get_header();
?>
<div class="prothom-row site-content prothom-search-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<main id="primary" class="site-main">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'prothom' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content', 'search' );
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
