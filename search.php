<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alphabet_Finserve
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto px-5 py-20">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-16 border-b border-gray-100 pb-12">
				<h1 class="page-title text-4xl md:text-5xl font-heading font-bold mb-4">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'alphabet-finserve' ), '<span class="text-primary">' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
            ?>
            </div>

			<?php
            the_posts_navigation(
                array(
                    'prev_text' => '← Older results',
                    'next_text' => 'Newer results →',
                )
            );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
