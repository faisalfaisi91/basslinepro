<?php
/*
Plugin Name: Progression Theme Elements - Vayvo
Plugin URI: https://progressionstudios.com
Description: Theme Elements for Progression Studios Theme
Version: 1.2
Author: Progression Studios
Author URI: https://progressionstudios.com/
Author Email: contact@progressionstudios.com
License: GNU General Public License v3.0
Text Domain: progression-elements-vayvo
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.


define( 'PROGRESSION_THEME_ELEMENTS_URL', plugins_url( '/', __FILE__ ) );
define( 'PROGRESSION_THEME_ELEMENTS_PATH', plugin_dir_path( __FILE__ ) );


// Translation Setup
add_action('plugins_loaded', 'progression_theme_elements_vayvo');
function progression_theme_elements_vayvo() {
	load_plugin_textdomain( 'progression-elements-vayvo', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

/**
* Enqueue or de-enqueue third party plugin scripts/styles
*/
function vayvo_progression_theme_elements_styles_scripts() {
	wp_register_script( 'boosted_elements_progression_masonry_js',  PROGRESSION_THEME_ELEMENTS_URL . 'js/masonry.js', '','1.0',true);
	wp_register_script( 'boosted_elements_progression_flexslider_js',  PROGRESSION_THEME_ELEMENTS_URL . 'js/flexslider.js', '','1.0',true);
	wp_register_script( 'afterglow',  PROGRESSION_THEME_ELEMENTS_URL . 'js/afterglow.min.js', '','1.0',true);
	wp_dequeue_style( 'boosted-elements-progression-prettyphoto-optional' ); //Removing a script
}
add_action( 'wp_enqueue_scripts', 'vayvo_progression_theme_elements_styles_scripts', 100 );



/**
* Calling new Page Builder Elements
*/
require_once PROGRESSION_THEME_ELEMENTS_PATH.'inc/elementor-helper.php';

function progression_vayvo_elements_load_elements(){
	require_once PROGRESSION_THEME_ELEMENTS_PATH.'elements/post-element.php';
	require_once PROGRESSION_THEME_ELEMENTS_PATH.'elements/slider-element.php';
}
add_action('elementor/widgets/widgets_registered','progression_vayvo_elements_load_elements');



/**
 * Custom Metabox Fields
 */
require PROGRESSION_THEME_ELEMENTS_PATH.'inc/custom-meta.php';


/**
 * Custom Comment rating
 */
require PROGRESSION_THEME_ELEMENTS_PATH.'inc/comment-rating.php';


/**
 * Custom Social Sharing
 */
require PROGRESSION_THEME_ELEMENTS_PATH.'inc/social-sharing.php';


/**
 * Condition Logic For Custom meta
 */
require PROGRESSION_THEME_ELEMENTS_PATH.'inc/cmb2-conditional-logic.php';


/**
 * Registering Custom Post Type
 */
add_action('init', 'vayvo_progression_custom_post_type_init');
function vayvo_progression_custom_post_type_init() {	

	register_post_type(
		'video_skrn',
		array(
			'labels' => array(
				'name' => esc_html__( "Videos", "progression-elements-vayvo" ),
				'singular_name' => esc_html__( "Video Post", "progression-elements-vayvo" )
			),
			'menu_icon' => 'dashicons-format-video',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array('slug' => 'title'),
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments'),
			'can_export' => true,
		)
	);
	
	register_taxonomy(
		'video-type', 'video_skrn', 
		array('hierarchical' => true, 
		'label' => esc_html__( "Video Types", "progression-elements-vayvo" ), 
		'query_var' => true, 
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'media-type'),
		)
	 );
	 
  	register_taxonomy(
  		'video-genres', 'video_skrn', 
  		array('hierarchical' => true, 
  		'label' => esc_html__( "Video Genres", "progression-elements-vayvo" ), 
  		'query_var' => true, 
		'show_in_rest' => true,
  		'rewrite' => array('slug' => 'media-genre'),
  		)
  	 );

	register_taxonomy(
		'video-category', 'video_skrn', 
		array('hierarchical' => true, 
		'label' => esc_html__( "Video Categories", "progression-elements-vayvo" ), 
		'query_var' => true, 
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'media-category'),
		)
	 );
	 
   	register_taxonomy(
   		'video-cast', 'video_skrn', 
   		array('hierarchical' => true, 
   		'label' => esc_html__( "Cast", "progression-elements-vayvo" ), 
			'query_var' => true, 
			'show_in_rest' => true,
   		'rewrite' => array('slug' => 'media-cast'),
   		)
   	 );
		 
	 
 	register_taxonomy(
 		'video-director', 'video_skrn', 
 		array('hierarchical' => true, 
 		'label' => esc_html__( "Director", "progression-elements-vayvo" ), 
 		'query_var' => true, 
		'show_in_rest' => true,
 		'rewrite' => array('slug' => 'media-director'),
 		)
 	 );

 	

}



