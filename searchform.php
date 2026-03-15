<?php
/**
 * The template for displaying search forms
 *
 * @package Alphabet_Finserve
 */
?>

<form role="search" method="get" class="search-form relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'alphabet-finserve' ); ?></span>
		<input type="search" class="search-field w-full px-6 py-4 rounded-full border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'alphabet-finserve' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit absolute right-4 top-1/2 -translate-y-1/2 text-text-muted hover:text-primary transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>
