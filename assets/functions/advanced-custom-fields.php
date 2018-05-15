<?php
// GENERATE DYNAMIC CSS FROM ADVANCED CUSTOM FIELDS

//function generate_options_css() {

   // $ss_dir = get_stylesheet_directory();

   //ob_start(); // Capture all output into buffer

   // require($ss_dir . '/assets/css/acf-dynamic-styles.php'); // Grab the custom-style.php file

  //  $css = ob_get_clean(); // Store output in a variable, then flush the buffer

    //file_put_contents($ss_dir . '/assets/css/acf-dynamic-styles.css', $css, LOCK_EX); // Save it as a css file

//}

//add_action( 'acf/save_post', 'generate_options_css' ); //Parse the output and write the CSS file on post save


 // SAVE ACF JSON LOCALLY (SPEED UP PAGE LOAD - REF: https://www.advancedcustomfields.com/resources/local-json/)
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

 // LOAD ACF JSON (SPEED UP PAGE LOAD - REF: https://www.advancedcustomfields.com/resources/local-json/)
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $paths;
    
}


//ADVANCED CUSTOM FIELDS: GET IMAGE WITH ALT

function get_image_with_alt($imagefield, $postID, $imagesize = 'full'){

$imageID = get_field($imagefield, $postID); 

$image = wp_get_attachment_image_src( $imageID, $imagesize ); 

$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); 

return '<img src="' . $image[0] . '" alt="' . $alt_text . '" />';

}



// THEME ADMIN - ADD CUSTOM OPTIONS TO ADMIN MENU

if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Website Settings',

		'menu_title'	=> 'Website Settings',

		'menu_slug' 	=> 'website-settings',

		'capability'	=> 'edit_posts',

		'icon_url' => '/wp-content/themes/searchactions/assets-admin/img/searchactions.png', // Add this line and replace the second inverted commas with class of the icon you like

		'redirect'		=> true

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'Company Settings',

		'menu_title'	=> 'Company Settings',

		'parent_slug'	=> 'website-settings',

		'parent_slug'	=> 'website-settings',

	));

	acf_add_options_sub_page(array(

));		

	

		acf_add_options_sub_page(array(

		'page_title' 	=> 'Social Media Settings',

		'menu_title'	=> 'Social Media Settings',

		'parent_slug'	=> 'website-settings',

	));



	acf_add_options_sub_page(array(

		'page_title' 	=> 'Layout',

		'menu_title'	=> 'Layout',

		'parent_slug'	=> 'website-settings',

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'Header',

		'menu_title'	=> 'Header',

		'parent_slug'	=> 'website-settings',

	));

	

	acf_add_options_sub_page(array(

	'page_title' 	=> 'Footer',

	'menu_title'	=> 'Footer',

	'parent_slug'	=> 'website-settings',

	));
	
	acf_add_options_sub_page(array(

	'page_title' 	=> 'Blog',

	'menu_title'	=> 'Blog',

	'parent_slug'	=> 'website-settings',

	));
	acf_add_options_sub_page(array(
	'page_title' 	=> 'Home Page',
	'menu_title'	=> 'Home Page',
	'parent_slug'	=> 'website-settings',
));

			acf_add_options_sub_page(array(

		'page_title' 	=> 'Insert Scripts/Styles',

		'menu_title'	=> 'Insert Scripts/Styles',

		'parent_slug'	=> 'website-settings',

	));

}