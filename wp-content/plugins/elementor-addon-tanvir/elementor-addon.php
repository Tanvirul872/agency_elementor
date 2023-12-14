<?php
/**
 * Plugin Name: Elementor Addon By Tanvir
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Tanvirul Karim
 * Author URI:  www.bengalcoder.com
 * Text Domain: elementor-addon
 */



 // Custom CSS and
function widget_styles() {
    wp_register_style( 'picchi-extension-style', plugins_url( 'assets/css/style.css', __FILE__ ) ); 
    wp_enqueue_style('picchi-extension-style');     
	
	wp_register_style( 'picchi-extension-responsive', plugins_url( 'assets/css/responsive.css', __FILE__ ) ); 
    wp_enqueue_style('picchi-extension-responsive');     


}	
// Register Widget Styles
add_action( 'elementor/frontend/after_enqueue_styles', 'widget_styles' );




// the function for register wodgets 

function register_hello_world_widget( $widgets_manager ) {


    require_once( __DIR__ . '/widgets/banner-widget.php' );
	require_once( __DIR__ . '/widgets/home-hero-widget.php' );
	require_once( __DIR__ . '/widgets/home-second-widget.php' );
    require_once( __DIR__ . '/widgets/home-third-widget.php' );

	require_once( __DIR__ . '/widgets/home-fourth-widget.php' );
	// require_once( __DIR__ . '/widgets/home-fifth-widget.php' );
	
    $widgets_manager->register( new \Banner_widget() );
	$widgets_manager->register( new \Hero_widget() );
	$widgets_manager->register( new \Home_second_widget() );
	$widgets_manager->register( new \Home_third_widget() );
	$widgets_manager->register( new \Home_fourth_widget() );
	// $widgets_manager->register( new \Home_fifth_widget() );


}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' ); 





// register new categories                
function add_elementor_widget_categories( $elements_manager ) {


	$elements_manager->add_category(
		'custom-theme-agency',
		[
			'title' => esc_html__( 'Theme Section', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	); 

    $elements_manager->add_category(
		'custom-theme-category',
		[
			'title' => esc_html__( 'Custom Theme', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

