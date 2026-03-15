<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alphabet_Finserve
 */

get_header();
?>

<main id="primary" class="site-main">

	<header class="relative text-black py-24 pt-44 overflow-hidden mb-16">
        <div class="absolute inset-0 z-0 bg-bg-light">
             <div class="absolute inset-0 bg-white/20 backdrop-blur-[2px]"></div>
        </div>
        <div class="container relative z-10 px-10">
            <h1 class="text-4xl md:text-5xl font-heading font-bold mb-4 text-black">
                <?php 
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } else {
                    echo esc_html__( 'Insights & News', 'alphabet-finserve' );
                }
                ?>
            </h1>
            <p class="text-xl text-black/80 max-w-2xl leading-relaxed">
                Expert perspectives on strategy, leadership, and industry trends.
            </p>
        </div>
    </header>

    <div class="container mx-auto px-5 pb-20">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </div>
        
        <div class="mt-12">
            <?php the_posts_navigation(); ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
