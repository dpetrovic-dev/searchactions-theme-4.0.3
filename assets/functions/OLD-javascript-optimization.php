<?php




//* OPTIMIZATION - ADD DEFER TO ALL JAVASCRIPTS EXCLUDING SPECIFIC SCRIPTS

//if (!(is_admin() )) {

//function js_defer_attr($tag){

# Do not add async to these scripts

//$scripts_to_exclude = array('jquery.min.js'); 

//foreach($scripts_to_exclude as $exclude_script){

	//if(true == strpos($tag, $exclude_script ) )

	//return $tag;	

//}

# Add async to all remaining scripts

//return str_replace( ' src', ' defer="defer" src', $tag );

//}

//add_filter( 'script_loader_tag', 'js_defer_attr', 10 );

//;;}



// OPTIMIZATION - REMOVE QUERY STRINGS FROM JS & CSS

//function remove_cssjs_ver( $src ) {

 //if( strpos( $src, '?ver=' ) )

 //$src = remove_query_arg( 'ver', $src );

 //return $src;

//}

//add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );

//add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );