<?php
/**
 * Plugin Name: Custom Post Types
 * Plugin URI:  http://monkeykode.com
 * Description: Register Custom Post Types
 * Version:     1.0.0
 * Author:      Jull Weber
 * Author URI:  http://monkeykode.com
 * License:     GPL-2.0+
 *
 * @package  QuickCustomPosts
 */
namespace QuickCustomPosts;
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


require_once( 'CustomPost.php' );
require_once( 'DisplayInCategoryPage.php' );


/**
 * Register Post Types.
 */
function quick_custom_post_types() {
	$textdomain = 'textdomain';
	qcp_create( $textdomain );
	// Add array of post types to be added to the main loop.
	// $add_to_category_page = new DisplayInCategoryPage( array(
	// 	'nav_menu_item',
	// 	'post',
	// 	'cpt',
	// 	'page'
	// ) );

}

/**
 * Create custom post with specific settings
 *
 * @param string $textdomain textdomain for the site.
 */
function qcp_create( $textdomain ) {
	// Deine the class
	$custom_post_1          = new CustomPost( $textdomain );
	// Define the options.
	// Define the rewrite
	// $rewrite                = array(
	// 	'slug'       => 'cpt',
	// 	'with_front' => true,
	// 	'pages'      => true,
	// );
	// Define all options
	// $settings_custom_post_1 = array(
	// 	'menu_icon'       => 'dashicons-building',
	// 	'public'          => true,
	// 	'has_archive'     => true,
	// 	'capability_type' => 'post',
	// 	'query_var'       => true,
	// 	'show_ui'         => true,
	// 	'show_in_menu'    => true,
	// 	'taxonomies'      => array( 'category' , 'post_tag'), // Add category and tags capability
	// 	'rewrite'         => $rewrite,
	// 	'supports'        => array(
	// 		'title',
	// 		'editor',
	// 		'excerpt',
	// 		'genesis-seo',
	// 		'thumbnail',
	// 		'genesis-layouts',
	// 		'genesis-cpt-archives-settings',
	// 	),
	// );
	// Use make function to create the custom post type (handle, singular name, plural name)
	// $custom_post_1->make( 'cpt', 'CPT', 'CPTs', $settings_custom_post_1 );


}


quick_custom_post_types();


