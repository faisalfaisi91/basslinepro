<?php


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
 
class CMB2_conditional_logic {
	/**
	 * This plugin's version number. Used for busting caches.
	 *
	 * @var string
	 */
	public $version = '1.0.0';

    /**
     * Construct the plugin object
     */
    public function __construct() {} 

    /**
     * Activate the plugin
     */
    public function activate() {
       add_action( 'admin_enqueue_scripts', array( $this, 'enqueues' ) );
    }

    public function enqueues() {
    	wp_enqueue_script('cmb2_conditional_logic', plugins_url( 'js/cmb2-conditional-logic.min.js', __FILE__ ),
    		array('jquery'), 
    		$this->version,
    		true
    	);
    }
} 

if( class_exists('CMB2_conditional_logic') ) {
	$CMB2_conditional_logic = new CMB2_conditional_logic();
	$CMB2_conditional_logic->activate();
}

/**
 * CMB2 Conditional Logic
 * https://github.com/awran5/CMB2-conditional-logic
 * Version:           1.0.0
 */