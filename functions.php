<?php
add_theme_support('menus');

function register_theme_menus() {

    register_nav_menus(
	    array(
		    'primary-menu' 	=> __( 'Primary Menu' )		
		)	
    );
}

add_action( 'init', 'register_theme_menus' );

function wptek_theme_styles(){
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css'  );
   
  
    
    wp_enqueue_style('font_playfair_roboto',  "https://fonts.googleapis.com/css?family=Playfair+Display:400,700i|Roboto:100,400,400i"); 
}

add_action('wp_enqueue_scripts', 'wptek_theme_styles');

function wptek_theme_js(){
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'),'',true);
}

add_action('wp_enqueue_scripts', 'wptek_theme_js');

