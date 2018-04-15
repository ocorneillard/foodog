<?php
// ******************** Crunchify Tips - Clean up WordPress Header START ** //

function crunchify_remove_version() {
	return '';
}
add_filter('the_generator', 'crunchify_remove_version');

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');

function crunchify_cleanup_query_string( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );

// ******************** Clean up WordPress Header END ********************** //


function style(){
  echo "<link rel='stylesheet' href='http://localhost/wordpress/wp-content/themes/foodog/style.css'>\n";
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 220, 200);

function add_custom_sizes() {
	add_image_size('small', 220, 200, true);
	add_image_size( 'big-one', 640, 430, true);
	add_image_size('featured', 350,250, true);
}

add_action('after_setup_theme','add_custom_sizes');


function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function widgets_init() {
register_sidebar( array(
'name' => __( 'Scrisoft Sidebar', 'scrisoft' ),
'id' => 'sidebar-1',
'before_title' => '
',
'after_title' => '

',
));
}
add_action('widgets_init', 'widgets_init');
?>
