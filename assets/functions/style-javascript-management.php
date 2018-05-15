<?php

//*****************************************************************************************************************



//			JAVASCRIPT



//*****************************************************************************************************************



//ADD SCRIPTS

function sa_adding_scripts() {

	

wp_register_script('what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array() , '', true);

	wp_enqueue_script('what-input');



wp_register_script('foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array('jquery') , '6.3.0', true);

	wp_enqueue_script('foundation-js');

  

add_action( 'wp_enqueue_scripts', 'sa_adding_scripts' );  

}



// OPTIMIZATION - REMOVE RENDER BLOCKING WORDPRESS SCRIPTS



function optimize_jquery() {

	

	if (!is_admin()) {

	

	wp_deregister_script('jquery');

	

	wp_deregister_script('jquery-migrate.min');

	

	//$protocol='http:';

	

	//if($_SERVER['HTTPS']=='on') {

	

	//$protocol='https:';

	

	//}

	

	//wp_register_script('jquery', $protocol.'//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', false, '3.6', true);

	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', false, '2.1', true);

wp_enqueue_script('jquery');



wp_register_script('what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array() , '', true);

	wp_enqueue_script('what-input');



wp_register_script('foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array('jquery') , '6.3.0', true);

	wp_enqueue_script('foundation-js');

}

}

add_action('template_redirect', 'optimize_jquery');





//*****************************************************************************************************************



//			STYLE SHEETS



//*****************************************************************************************************************



//REMOVE STYLES

function project_dequeue_unnecessary_styles() {

    wp_dequeue_style( 'taptap-fonts' );

        wp_deregister_style( 'taptap-fonts' );

    

	wp_dequeue_style( 'taptap-fontawesome' );

        wp_deregister_style( 'taptap-fontawesome' );

    

	wp_dequeue_style( 'bonfire-taptap-css' );

        wp_deregister_style( 'bonfire-taptap-css' );

    

	wp_dequeue_style( 'formidable' );

        wp_deregister_style( 'formidable' );

}

add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );



//ADD STYLES

function sa_adding_styles() {

wp_register_style( 'foundation', get_template_directory_uri().'/vendor/foundation-sites/dist/css/foundation.min.css' );

	wp_enqueue_style('foundation');



wp_register_style( 'motion-ui', get_template_directory_uri().'/vendor/motion-ui/dist/motion-ui.min.css' );

	wp_enqueue_style('motion-ui');	

	

wp_register_style( 'font-awesome', get_template_directory_uri().'/assets/fonts/css/font-awesome.min.css' );

	wp_enqueue_style('font-awesome');	



wp_register_style( 'theme-styles', get_template_directory_uri().'/assets/css/theme-style.css' );

	wp_enqueue_style('theme-styles');	
/* GET CHILD THEME CSS */
wp_register_style( 'child-styles', get_stylesheet_directory_uri().'/style.css' );

	wp_enqueue_style('child-styles');

}

add_action( 'wp_enqueue_scripts', 'sa_adding_styles' );  