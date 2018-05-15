<?php

//ADD HOME CLASS TO BODY FOR TEST PAGE
add_filter( 'body_class','halfhalf_body_class' );
function halfhalf_body_class( $classes ) {
 
    if ( is_page_template( 'page-ab-test-1.php' ) ) {
        $classes[] = 'home';
    }
     
    return $classes;
     
}