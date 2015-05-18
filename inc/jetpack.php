<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package daksports
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function dak_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'dak_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function dak_jetpack_setup
add_action( 'after_setup_theme', 'dak_jetpack_setup' );

function dak_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function dak_infinite_scroll_render