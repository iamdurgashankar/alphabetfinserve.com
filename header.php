<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alphabet-finserve' ); ?></a>

	<nav id="site-navigation" class="fixed top-4 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-lg rounded-2xl border border-border-light/50 py-3">
		<div class="max-w-[1600px] mx-auto flex justify-between items-center px-6">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center h-auto">
				<div class="flex items-center justify-center transition-all duration-300">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="h-10 md:h-12 w-auto object-contain transition-all duration-300" id="navbar-logo">';
                    } else {
                        echo '<span class="text-xl font-bold text-text-heading" id="navbar-text">' . get_bloginfo( 'name' ) . '</span>';
                    }
                    ?>
				</div>
			</a>

			<!-- Desktop Menu -->
			<div class="hidden md:flex items-center gap-10">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'flex gap-8 list-none m-0 p-0',
                        'add_li_class'   => 'font-semibold tracking-wide text-[0.9rem] transition-colors relative group uppercase text-body hover:text-primary',
                    )
                );
                ?>

				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="px-6 py-2.5 rounded-xl font-bold text-xs shadow-md hover:-translate-y-0.5 transition-all uppercase tracking-wider bg-primary text-white hover:bg-primary/90 hover:shadow-primary/30">
					Get Consultation
				</a>
			</div>

			<button id="mobile-menu-toggle" class="md:hidden transition-colors text-body" aria-label="Toggle Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
			</button>
		</div>

		<!-- Mobile Menu (Dynamic) -->
		<div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-border-light py-6 px-6 flex flex-col gap-4 text-body animate-fade-in-down">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col gap-4 list-none m-0 p-0',
                    'add_li_class'   => 'font-bold text-lg py-3 border-b border-border/50 uppercase tracking-wide text-body hover:text-primary',
                )
            );
            ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="bg-primary text-white text-center py-4 rounded-md font-bold uppercase tracking-wider mt-4 hover:bg-primary/90 transition-colors">
                Get Consultation
            </a>
		</div>
	</nav>
