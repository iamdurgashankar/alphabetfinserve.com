<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Alphabet_Finserve
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto px-5 py-32 text-center">

		<section class="error-404 not-found">
			<header class="page-header mb-12">
				<h1 class="page-title text-6xl md:text-8xl font-heading font-bold text-primary mb-6">404</h1>
                <h2 class="text-3xl font-bold mb-6"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alphabet-finserve' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="text-lg text-text-muted mb-12"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'alphabet-finserve' ); ?></p>
				
                <div class="max-w-md mx-auto">
                    <?php get_search_form(); ?>
                </div>
                
                <div class="mt-12">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bg-primary text-white px-8 py-3 rounded-md font-semibold hover:bg-primary-dark transition-colors inline-block">
                        Return Home
                    </a>
                </div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
