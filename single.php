<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alphabet_Finserve
 */

get_header();
?>

	<main id="primary" class="site-main py-20">

		<?php
		while ( have_posts() ) :
			the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-16 container mx-auto px-5 text-center">
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                    ?>
                        <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-6 uppercase tracking-wide">
                            <?php echo esc_html( $categories[0]->name ); ?>
                        </span>
                    <?php endif; ?>

                    <?php the_title( '<h1 class="entry-title text-4xl md:text-6xl font-heading font-bold mb-8 leading-tight">', '</h1>' ); ?>
                    
                    <div class="flex items-center justify-center gap-6 text-sm text-text-muted">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            <?php the_author(); ?>
                        </span>
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            <?php echo get_the_date(); ?>
                        </span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="container mx-auto px-5 mb-16 max-w-5xl">
                        <div class="rounded-3xl overflow-hidden shadow-2xl aspect-[21/9]">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="entry-content container mx-auto px-5 max-w-3xl prose prose-lg prose-primary">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer container mx-auto px-5 max-w-3xl mt-20 pt-12 border-t border-gray-100 italic text-text-muted">
                    <?php the_tags( '<span class="tags-links">' . esc_html__( 'Tagged: ', 'alphabet-finserve' ), ', ', '</span>' ); ?>
                </footer>
            </article>

            <div class="bg-bg-light mt-32 py-20">
                <div class="container mx-auto px-5 max-w-5xl">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<div class="text-sm text-text-muted mb-2">Previous Article</div><div class="text-xl font-bold font-heading">%title</div>',
                            'next_text' => '<div class="text-sm text-text-muted mb-2">Next Article</div><div class="text-xl font-bold font-heading">%title</div>',
                        )
                    );
                    ?>
                </div>
            </div>
            <?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
