<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package {%= prefix %}
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function {%= prefix %}_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '_s_infinite_scroll_render',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', '{%= prefix %}_jetpack_setup' );

/**
 * Prevent Jetpack from enabling modules by default.
 */
add_filter( 'jetpack_get_default_modules', '__return_empty_array', 99 );


/**
 * Custom render function for Infinite Scroll.
 */
function {%= prefix %}_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function {%= prefix %}_infinite_scroll_render
