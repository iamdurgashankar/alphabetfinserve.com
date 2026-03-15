<?php
/**
 * Alphabet Finserve functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alphabet_Finserve
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function alphabet_finserve_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'alphabet-finserve' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
    
    // Elementor support
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'alphabet_finserve_setup' );

/**
 * Enqueue scripts and styles.
 */
function alphabet_finserve_scripts() {
	wp_enqueue_style( 'alphabet-finserve-style', get_stylesheet_uri(), array(), _S_VERSION );
    
    // Google Fonts
    wp_enqueue_style( 'alphabet-finserve-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap', array(), null );

    // Enqueue Tailwind build
	wp_enqueue_style( 'alphabet-finserve-tailwind', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );

	wp_enqueue_script( 'alphabet-finserve-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alphabet_finserve_scripts' );

/**
 * Register Elementor locations (for Theme Builder)
 */
function alphabet_finserve_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme_builder/register_locations', 'alphabet_finserve_register_elementor_locations' );

/**
 * Add custom classes to nav menu items
 */
function alphabet_finserve_nav_menu_link_attributes( $atts, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$atts['class'] = $args->add_li_class;
        
        // Add active class if current
        if ( in_array( 'current-menu-item', $item->classes ) ) {
            $atts['class'] = str_replace('text-body', 'text-primary', $atts['class']);
        }
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'alphabet_finserve_nav_menu_link_attributes', 10, 3 );

/**
 * Include Custom Elementor Widgets
 */
require get_template_directory() . '/inc/alphabet-widgets.php';

/**
 * Include One-Click Demo Importer
 */
require get_template_directory() . '/inc/demo-importer.php';
/**
 * Handle Contact Form Submission
 */
function alphabet_finserve_handle_contact_form() {
    if ( ! isset( $_POST['alphabet_contact_nonce_field'] ) || ! wp_verify_nonce( $_POST['alphabet_contact_nonce_field'], 'alphabet_contact_nonce' ) ) {
        wp_die( 'Security check failed' );
    }

    $to = 'info@alphabetfinserve.com';
    $subject = sanitize_text_field( $_POST['subject'] );
    $full_name = sanitize_text_field( $_POST['full_name'] );
    $email = sanitize_email( $_POST['email'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    $body = "Name: $full_name\n";
    $body .= "Email: $email\n";
    if ( ! empty( $phone ) ) {
        $body .= "Phone: $phone\n";
    }
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message";

    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: ' . $full_name . ' <' . $email . '>' );

    wp_mail( $to, $subject, $body, $headers );

    wp_redirect( add_query_arg( 'contact_success', '1', home_url( '/contact' ) ) );
    exit;
}
add_action( 'admin_post_nopriv_alphabet_contact_form', 'alphabet_finserve_handle_contact_form' );
add_action( 'admin_post_alphabet_contact_form', 'alphabet_finserve_handle_contact_form' );
