/*****************************************
 *****************************************
           GLOBAL LAYOUT
 ****************************************
 *****************************************/







/*****************************************
 *****************************************
           GLOBAL OPTIONS
 ****************************************
 *****************************************/
 /*--- MENU ---*/
<?php
// Align menu items vertically with logo - uses logo height as menu item line-height
 $imageArray = get_field('global_logo','option'); // Array returned by Advanced Custom Fields
 $imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 $imageURL = $imageArray['url']; // Grab the full size version 
 $imageWidth = $imageArray['width']; // Grab, from the array, the 'alt'
 $imageHeight = $imageArray['height']; // Grab, from the array, the 'alt'
 $imageThumbURL = $imageArray['sizes']['thumbnail']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 ?>
.top-bar .menu li a{line-height:<?php echo $imageHeight ;?>px;padding:0;}