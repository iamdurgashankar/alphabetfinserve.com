<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphabet_Finserve
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto px-5 py-20">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-16 border-b border-gray-100 pb-12">
				<?php
				the_archive_title( '<h1 class="page-title text-4xl m:text-5xl font-heading font-bold mb-4">', '</h1>' );
				the_archive_description( '<div class="archive-description text-xl text-text-muted">', '</div>' );
				?>
			</header><!-- .page-header -->

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
            ?>
            </div>

			<?php
            the_posts_navigation(
                array(
                    'prev_text' => '← Older posts',
                    'next_text' => 'Newer posts →',
                )
            );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
