<?php

if ( ! function_exists( 'pct_theme_setup' ) ) {
	function pct_theme_setup() {
		load_theme_textdomain( 'pct', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'pct' ),
		) );
	}
}
add_action( 'after_setup_theme', 'pct_theme_setup' );

function pct_enqueue_assets() {
	wp_enqueue_style( 'pct-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'pct_enqueue_assets' );

/**
 * Fallback menu for when no menu is assigned to the primary location.
 */
function pct_page_menu_fallback() {
	$pages = wp_list_pages( array(
		'title_li' => '',
		'echo' => 0,
	) );

	if ( $pages ) {
		echo '<ul class="menu">' . $pages . '</ul>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}