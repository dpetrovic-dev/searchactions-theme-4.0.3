<?php



// Register menus



register_nav_menus(



	array(



		'main-nav' => __( 'The Main Menu', 'jointswp' ),   // Main nav in header



		'footer-links' => __( 'Footer Links', 'jointswp' ) // Secondary nav in footer



	)



);







// Top Menu



function register_my_menu() {



  register_nav_menu('top-bar-menu',__( 'Top Bar Menu' ));



}



add_action( 'init', 'register_my_menu' );







// Main Nav



function joints_top_nav() {



	 wp_nav_menu(array(



        'container' => false,                           // Remove nav container



        'menu_class' => 'vertical large-horizontal menu',       // Adding custom nav class



        'items_wrap' => '<ul id="%1$s" class="%2$s grid-x grid-x-padding" data-responsive-menu="large-dropdown">%3$s</ul>',



        'theme_location' => 'main-nav',        			// Where it's located in the theme



        'depth' => 5,                                   // Limit the depth of the nav



        'fallback_cb' => false,                         // Fallback function (see below)



        'walker' => new Topbar_Menu_Walker()



    ));



} 







// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker



class Topbar_Menu_Walker extends Walker_Nav_Menu {



    function start_lvl(&$output, $depth = 0, $args = Array() ) {



        $indent = str_repeat("\t", $depth);



        $output .= "\n$indent<ul class=\"menu\">\n";



    }



}







// The Off Canvas Menu



function joints_off_canvas_nav() {



	 wp_nav_menu(array(



        'container' => false,                           // Remove nav container



        'menu_class' => 'vertical menu',       // Adding custom nav class



        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',



        'theme_location' => 'main-nav',        			// Where it's located in the theme



        'depth' => 5,                                   // Limit the depth of the nav



        'fallback_cb' => false,                         // Fallback function (see below)



        'walker' => new Off_Canvas_Menu_Walker()



    ));



} 







class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {



    function start_lvl(&$output, $depth = 0, $args = Array() ) {



        $indent = str_repeat("\t", $depth);



        $output .= "\n$indent<ul class=\"vertical menu\">\n";



    }



}







// The Footer Menu



function joints_footer_links() {



    wp_nav_menu(array(



    	'container' => 'false',                         // Remove nav container



    	'menu' => __( 'Footer Links', 'jointswp' ),   	// Nav name



    	'menu_class' => 'menu',      					// Adding custom nav class



    	'theme_location' => 'footer-links',             // Where it's located in the theme



        'depth' => 0,                                   // Limit the depth of the nav



    	'fallback_cb' => ''  							// Fallback function



	));



} /* End Footer Menu */







// Header Fallback Menu



function joints_main_nav_fallback() {



	wp_page_menu( array(



		'show_home' => true,



    	'menu_class' => '',      						// Adding custom nav class



		'include'     => '',



		'exclude'     => '',



		'echo'        => true,



        'link_before' => '',                           // Before each link



        'link_after' => ''                             // After each link



	) );



}







// Footer Fallback Menu



function joints_footer_links_fallback() {



	/* You can put a default here if you like */



}







// Add Foundation active class to menu



function required_active_nav_class( $classes, $item ) {



    if ( $item->current == 1 || $item->current_item_ancestor == true ) {



        $classes[] = 'active';



    }



    return $classes;



}



add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );







// Clean Nav - Remove Classes From Nav Menu Items */



add_filter('nav_menu_css_class', 'searchactions_attributes_filter', 100, 1);



//add_filter('nav_menu_item_id', 'searchactions_attributes_filter', 100, 1);



add_filter('page_css_class', 'searchactions_attributes_filter', 100, 1);



function searchactions_attributes_filter($var) {



  return is_array($var) ? array() : '';



}







// Add Schema.org Itemprop=URL to nav items



function add_nav_link_attr( $atts, $item, $args ) {



  $atts['itemprop'] = 'url';



  return $atts;



}



add_filter( 'nav_menu_link_attributes', 'add_nav_link_attr', 10, 3 );