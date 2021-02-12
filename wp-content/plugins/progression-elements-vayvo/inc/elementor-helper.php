<?php
namespace Elementor;

function progression_vayvo_elements_elementor_init(){
    Plugin::instance()->elements_manager->add_category(
        'progression-elements-vayvo-cat',
        [
            'title'  => 'Vayvo Addons',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','Elementor\progression_vayvo_elements_elementor_init');



//Query Categories List
function vayvo_elements_post_type_categories(){
	//https://developer.wordpress.org/reference/functions/get_terms/
	$terms = get_terms( array( 
		'taxonomy' => 'video-category',
		'hide_empty' => true,
	));
	
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	foreach ( $terms as $term ) {
		$options[ $term->slug ] = $term->name;
	}
	return $options;
	}
	
	
}


function vayvo_elements_post_type_types(){
	//https://developer.wordpress.org/reference/functions/get_terms/
	$terms = get_terms( array( 
		'taxonomy' => 'video-type',
		'hide_empty' => true,
	));
	
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	foreach ( $terms as $term ) {
		$options[ $term->slug ] = $term->name;
	}
	return $options;
	}
	
	
}


function vayvo_elements_post_type_genres(){
	//https://developer.wordpress.org/reference/functions/get_terms/
	$terms = get_terms( array( 
		'taxonomy' => 'video-genres',
		'hide_empty' => true,
	));
	
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	foreach ( $terms as $term ) {
		$options[ $term->slug ] = $term->name;
	}
	return $options;
	}
	
	
}

