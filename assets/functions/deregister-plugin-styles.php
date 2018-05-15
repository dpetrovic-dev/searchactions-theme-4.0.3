<?php

//REMOVE PLUGIN STYLE SHEETS AND ADD THEM TO MASTER-CSS.PHP ARRAY

add_action('wp_print_styles', 'sa_deregister_styles', 100);



function sa_deregister_styles() {

  wp_deregister_style('searchford_css');

  wp_deregister_style('searchford_custom_css');

  wp_deregister_style('taptap-fonts');

  wp_deregister_style('taptap-fontawesome');
  
  wp_deregister_style('bonfire-taptap-css');

  wp_deregister_style('formidable');
 
 wp_deregister_style('responsive-menu-pro');
 
 wp_deregister_style('aptf-bxslider');
 
 wp_deregister_style('aptf-front-css');
 
  wp_deregister_style('aptf-font-css');
  
  wp_deregister_style('cff');
  
  wp_deregister_style('cff-font-awesome');
  
 
//Superfish menu (deregistering breaks menu - logo not appearing )
 //wp_deregister_style('sf_styles'); 
 //wp_deregister_style('la-icon-maneger-style'); 
 //wp_deregister_style('jquery-ui-smoothness');

 // QUICK AND EASY FAQ FONT AWESOME
// wp_deregister_style('quick-and-easy-faqs');
// wp_deregister_style('font-awesome');

 // wp_deregister_style('motion-ui-css');

  //wp_deregister_style('foundation-css-css');

  //wp_deregister_style('site-css');

}



