<?php
//OPTIMIZATION - Cloudflare rocketloader script.  If rocketloader set to automatic and breaking site, use this script to tell it to ignore specific scripts
function rocket_loader_attributes_start() {
    ob_start();
}

function rocket_loader_attributes_end() {
    $script_out = ob_get_clean();
    $script_out = str_replace(
      "type='text/javascript' src='{rocket-ignore}", 
      'data-cfasync="false"'." src='", 
      $script_out);  
    print $script_out;
}

function rocket_loader_attributes_mark($url) {
    // Set up which scripts/strings to ignore
    $ignore = array (
        'taptap.js',
		 'foundation.min.js',
    );
    //matches only the script file name
    preg_match('/(.*)\?/', $url, $_url);
    if (isset($_url[1]) && substr($_url[1], -3)=='.js') {
      foreach($ignore as $s) {
         if (strpos($_url[1], $s)!==false)
           return "{rocket-ignore}$url";
      }
      return "$url' data-cfasync='true";
    }

    return "$url";

}
if (!is_admin()) {
  add_filter( 'clean_url', 'rocket_loader_attributes_mark', 11, 1);
  add_action( 'wp_print_scripts', 'rocket_loader_attributes_start');
  add_action( 'print_head_scripts', 'rocket_loader_attributes_end');
}

