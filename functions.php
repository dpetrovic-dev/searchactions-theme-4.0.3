<?php
//*******************************************************************************************

//

//      THEME FUNCTIONS - DO NOT EDIT

//

//*******************************************************************************************

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Remove Scripts and Styles
require_once(get_template_directory().'/assets/functions/style-javascript-management.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Remove 4.2 Emoji Support
require_once(get_template_directory().'/assets/functions/disable-emoji.php');  

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Advanced Custom Field Functions
require_once(get_template_directory().'/assets/functions/advanced-custom-fields.php');

// AMP PAGES
require_once(get_template_directory().'/assets/functions/amp.php');

// Security
require_once(get_template_directory().'/assets/functions/security.php');

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

add_theme_support( 'automatic-feed-links' );