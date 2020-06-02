<?php

/***** Fetch Theme Data *****/

$mh_magazine_data = wp_get_theme('mh-magazine');
$mh_magazine_version = $mh_magazine_data['Version'];
$mh_magazine_child_data = wp_get_theme('mh-magazine-child');
$mh_magazine_child_version = $mh_magazine_child_data['Version'];

/***** Load Stylesheets *****/

function mh_magazine_child_styles() {
	global $mh_magazine_version, $mh_magazine_child_version;
    wp_enqueue_style('mh-magazine', get_template_directory_uri() . '/style.css', array(), $mh_magazine_version);
    wp_enqueue_style('mh-magazine-child', get_stylesheet_uri(), array('mh-magazine'), $mh_magazine_child_version);
    if (is_rtl()) {
		wp_enqueue_style('mh-magazine-rtl', get_template_directory_uri() . '/rtl.css', array(), $mh_magazine_version);
	}
}
add_action('wp_enqueue_scripts', 'mh_magazine_child_styles');

?>