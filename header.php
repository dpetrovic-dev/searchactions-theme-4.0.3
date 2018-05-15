<!doctype html>

<html class="no-js" lang="en" dir="ltr">

<head>


<meta charset="utf-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/wp-content/themes/searchactions/favicon.ico" type="image/x-icon" />
<style type="text/css">

<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>

<?php if ( get_field( 'global_overlay_bg_img','option' ) ): ?>

<?php // Banner height taken from image height + padding in theme-style.css

	

	$imageArray = get_field('global_overlay_bg_img','option'); 

	

	$imageURL = $imageArray['url']; 

	

	$imageWidth = $imageArray['width']; 

	

	$imageHeight = $imageArray['height']; 

	

	$imageThumbURL = $imageArray['sizes']['thumbnail']; 

	

	?>

<?php 

$image = get_field('global_overlay_bg_img','option');

if( !empty($image) ): ?>

/* OVERLAY - BG IMAGE */

/* overlay on homepage only? */

<?php if ( get_field('global_header_overlay_homepage_only_truefalse','option') == true ) { ?>.home.page .overlay<?php } else { ?>.page .overlay,.bloggy-home .overlay<?php }; ?>{background-image:url(<?php echo $image['url']; ?>); background-position:top center; background-size:cover;background-repeat:no-repeat; width:100%;}

header,.boxed .top-bar,.ceiling{border:none}



<?php endif; ?>

<?php if( get_field('global_overlay_bg_color','option') ){ ?>

/* OVERLAY - BG COLOR */

/* overlay on homepage only? */

<?php if ( get_field('global_header_overlay_homepage_only_truefalse','option') == true ) { ?>.home.page .overlay<?php } else { ?>.page .overlay,.bloggy-home .overlay<?php }; ?>{background:<?php the_field('global_overlay_bg_color','option'); ?>;background-size:cover; background-size: 100% 100%; width:100%;}

header,.boxed .top-bar,.ceiling{border:none}

<?php }; ?>

<?php if (get_field('global_floatingnav_truefalse','option') == 'yes' ) { ?>

/* OVERLAY - FLOATING NAV */

@media screen and (min-width:64em){

.is-stuck .floating nav{background:none;border:none;margin-top:0}

.sticky .floating .top-bar {padding:0.75rem 2rem}

}

<?php } ?>

<?php endif; ?>

<?php if( get_field('global_logo_white_truefalse','option') ): ?>

/* OVERLAY - WHITE LOGO */

/* overlay on homepage only? */

<?php if ( get_field('global_header_overlay_homepage_only_truefalse','option') == true ) { ?>.home.page .overlay<?php } else { ?>.page .overlay<?php }; ?> .top-bar-left .menu li a img,.overlay .logo a img{filter: brightness(0) invert(1);-webkit-filter:brightness(0) invert(1);}

<?php endif; ?>

<?php if (get_field('global_overlay_content_area_boxed','option') == 'yes' ) { ?>

/* OVERLAY - BOXED CONTENT AREA - <MAIN> ELEMENT */

@media screen and (min-width:64em){

	main{max-width:75rem;}

}

<?php } ?>

/* END OVERLAY */

<?php } else { ?>

<?php } ?>	

<?php if( get_field('global_ceiling_bg_color','option') ): ?>

/* CEILING */

.ceiling{background:<?php the_field('global_ceiling_bg_color','option'); ?>}

/* END CEILING */

<?php endif; ?>

/* MOBILE TABBED BUTTONS - HIDE NAV ON MED/SMALL */

<?php if ( get_field('global_mobile_buttons_custom_select','option') ) { ?>

<?php $saTabbedButtons = get_field('global_mobile_buttons_custom_select','option');  ?> 

    <?php if ($saTabbedButtons == 'tab') {   ?> 

	@media screen and (max-width:63.9375em){

		.top-bar{display:none;}       

	}

<?php } ?>   

<?php } ?>



<?php if (get_field('global_navigation_layout_select','option')) { ?>

<?php $saLayout = get_field('global_navigation_layout_select','option'); ?>

<?php if ($saLayout == 'menu1') { ?>

/* MENU 1 */

<?php

$imageArray = get_field('global_logo','option'); 

$imageHeight = $imageArray['height']; 

$imageThumbURL = $imageArray['sizes']['thumbnail']; 

?>

.top-bar .menu li a{line-height:<?php echo $imageHeight ;?>px;padding:0;}

.top-bar .submenu li a{line-height:100%;padding:1rem 0}

.top-bar-right,.is-stuck .floating .top-bar-right{height:<?php echo $imageHeight ;?>px;}

<?php if ( get_field('global_navigation_calltoaction_truefalse','option') == true ) { ?>

/* Add call to action button to last menu item */

	<?php get_field('global_navigation_calltoaction_truefalse','option'); ?>

	/* Nav CTA button (Last Menu Item) */

		nav#main-menu ul#menu-main-menu-1 li:last-child a,

		.sticky nav#main-menu ul#menu-main-menu-1 li:last-child a

		{background-color: #D05E5F;border:1px solid #fff;border-radius:4px;color:#fff;line-height:35px;padding-right:1rem;padding-left:1rem;text-shadow: 1px 1px 1px #8D2929;} 

		nav#main-menu ul#menu-main-menu-1 li:last-child a:hover,

		.sticky nav#main-menu ul#menu-main-menu-1 li:last-child a:hover{background:#AE3333;opacity:1.0;}

		/* NAV CTA SUB MENU (Remove button) */

		.sticky nav#main-menu ul#menu-main-menu-1 li ul li:last-child a{background-color:transparent;border:none; border-radius:0; color:#222;line-height:100%;padding:1rem 0 1rem 1rem; text-shadow:none}

		.sticky nav#main-menu ul#menu-main-menu-1 li ul li:last-child a:hover{background-color:#fafafa;opacity:inherit}

<?php } ?>

			

<?php }  else if ($saLayout == 'menu2') {  ?>

   	

	/* MENU 2 */

<?php

if (get_field('global_ceiling_layout_select','option')) { 

$selection = get_field('global_ceiling_layout_select','option');

if ($selection === 'left') { 

echo '.ceiling_nav{float:left;}

.ceiling_search{float:left;margin-left:0;padding-left:0;margin-right:1rem;}';

} else if ($selection === 'right') { 

echo '.ceiling_nav{float:right;}

.ceiling_search{float:right;margin-left:1rem;}';

} else if ($selection === 'split ') {

echo '.ceiling_nav{float:left;}

.ceiling_search{float:right;}'; 

} else {

echo '.ceiling_nav{float:left;}

.ceiling_search{float:right;}'; 



}

}

?>

<?php

$imageArray = get_field('global_logo','option'); 

$imageHeight = $imageArray['height']; 

$imageThumbURL = $imageArray['sizes']['thumbnail']; 

?>

.top-bar .menu li a{line-height:<?php echo $imageHeight ;?>px;padding:0;}

.top-bar .submenu li a{line-height:100%;padding:1rem 0}	



<?php if ( get_field('global_navigation_calltoaction_truefalse','option') == true ) { ?>

/* Add call to action button to last menu item */

	<?php get_field('global_navigation_calltoaction_truefalse','option'); ?>

	/* Nav CTA button (Last Menu Item) */

		nav#main-menu ul#menu-main-menu li:last-child a,

		.sticky nav#main-menu ul#menu-main-menu li:last-child a

		{background-color: #D05E5F;border:1px solid #fff;border-radius:4px;color:#fff;line-height:35px;padding-right:1rem;padding-left:1rem;text-shadow: 1px 1px 1px #8D2929;} 

		nav#main-menu ul#menu-main-menu li:last-child a:hover,

		.sticky nav#main-menu ul#menu-main-menu li:last-child a:hover{background:#AE3333;opacity:1.0;}

		/* NAV CTA SUB MENU (Remove button) */

		.sticky nav#main-menu ul#menu-main-menu li ul li:last-child a{background-color:transparent;border:none; border-radius:0; color:#222;line-height:100%;padding:1rem 0 1rem 1rem; text-shadow:none}

		.sticky nav#main-menu ul#menu-main-menu li ul li:last-child a:hover{background-color:#fafafa;opacity:inherit}

<?php } ?>



<?php } else if ($saLayout == 'menu3') { ?>

/* MENU 3 */

<?php

$imageArray = get_field('global_logo','option'); 

$imageHeight = $imageArray['height']; 

$imageThumbURL = $imageArray['sizes']['thumbnail']; 

?>

/*.ceiling_search and .floor height =  1/2 of logo height  */

.menu3-wrapper .ceiling,

.menu3-wrapper .ceiling_nav,

.menu3-wrapper .floor

{height: calc((<?php echo $imageHeight ;?>px / 2));

  height: -webkit-calc((<?php echo $imageHeight ;?>px / 2));

   height:   -moz-calc((<?php echo $imageHeight ;?>px / 2));

   height:      -o-calc((<?php echo $imageHeight ;?>px / 2));

   }

/*.ceiling_search and .floor menu item Line-height = 1/2 of logo height  */

.menu3-wrapper .ceiling_nav .menu > li > a,

.menu3-wrapper .floor .menu > li > a,

 .menu3-wrapper .floor .menu > li > a

 {line-height: calc((<?php echo $imageHeight ;?>px / 2));

  line-height: -webkit-calc((<?php echo $imageHeight ;?>px / 2));

   line-height:   -moz-calc((<?php echo $imageHeight ;?>px / 2));

   line-height:      -o-calc((<?php echo $imageHeight ;?>px / 2));}

 /* ceiling_search padding-top =  height of search bar (30px) minus 1/2 height of logo above */

 .menu3-wrapper .search_container{ 

 height: calc(<?php echo $imageHeight ;?>px / 2);

   height: calc(<?php echo $imageHeight ;?>px / 2);

   height: calc(<?php echo $imageHeight ;?>px / 2);

  height: calc(<?php echo $imageHeight ;?>px / 2);}

<?php if ( get_field('global_ceiling_search_truefalse','option') == false ) { ?>

nav.menu3 .ceiling ul li:last-child a{padding-right:0}

<?php } else { ?>

nav.menu3 .ceiling ul li:last-child a{padding-right:1rem;}

<?php } ?>

.top-bar-right {height:<?php echo $imageHeight ;?>px;padding:0;}

.top-bar-right ul{float:none}

.floor,.ceiling{display:block;width:auto}

.ceiling{background:transparent}

.ceiling ul li,.floor ul li {display: table-cell; vertical-align: middle;}

.is-stuck .floor ul li{line-height:<?php echo $imageHeight ;?>px;height:<?php echo $imageHeight ;?>px;} 

.is-stuck .menu3 .floor ul li a{line-height:<?php echo $imageHeight ;?>px;}

.is-stuck .menu3 .floor ul li ul li a{line-height:100%;padding:1rem 0}

<?php } else if ($saLayout == 'menu4') { ?>

/* MENU 4 */



 <?php if (get_field('global_ceiling_layout_select','option')) { 

$selection = get_field('global_ceiling_layout_select','option');

if ($selection === 'left') { 

echo '.ceiling_nav{float:left;}

	.ceiling_search{float:left;margin-right:1rem;}';



} else if ($selection === 'right') { 

echo '.ceiling_nav{float:right;}

	.ceiling_search{float:right;margin-left:1rem;}';



} else if ($selection === 'split ') {

	echo '.ceiling_nav{float:left;}

	.ceiling_search{float:right;}'; 



} else {

echo '.ceiling_nav{float:left;}

	.ceiling_search{float:right;margin-left:1rem;}'; 



}



}



?>

.menu4-container nav{padding:0}

.menu4-main-nav{display: table;margin: 0 auto;}

.top-bar-right ul{float:none}

.menu4-main-nav ul li{display:inline;}

.menu4-main-nav ul li ul li a,.top-bar.menu4 .menu > li a{line-height:185%;}

.top-bar.menu4 .submenu > li a,nav.menu4#main-menu ul#menu-main-menu li ul.is-dropdown-submenu li a{margin:0;padding:.75rem 0 .75rem 0}

<?php } else { ?>

<?php ; } ?>

/* END MENU */

<?php } ?>



<?php if ( get_field('page_banner_select') == true ) { ?>

/* -------------------------- 

- DISPLAY BANNER 

-----------------------------*/

<?php if ( get_field( 'page_banner_add_padding' ) ) { ?>

/* banner padding */

.bannerpadding{padding-top:<?php the_field('page_banner_add_padding'); ?>;padding-bottom:<?php the_field('page_banner_add_padding'); ?>;}

<?php } ?>

	<?php if (get_field('page_desktop_banner_bg_select')) { ?>

	/* ------------------------------------------------

				DESKTOP BACKGROUND

	---------------------------------------------------- */

				<?php $bannerDesktop = get_field('page_desktop_banner_bg_select');  ?> 

				<?php if ($bannerDesktop == 'background') {   ?> 	

				<?php // Banner height taken from image height + padding in theme-style.css

				$imageArray = get_field('page_desktop_banner_image_upload'); 

				$imageURL = $imageArray['url']; 

				$imageWidth = $imageArray['width']; 

				$imageHeight = $imageArray['height']; 

				$imageThumbURL = $imageArray['sizes']['thumbnail']; 

				?>

				.banner,.bannerinside{background-image:url(<?php echo $imageURL ;?>)!important;background-position:top center;background-repeat:no-repeat;<?php if ( get_field('page_banner_background_height') == true ) { ?>height:<?php echo $imageHeight ;?>px;<?php } else { ?>height:auto;<?php } ?>width:100%;}				

		<?php }?>

		

		<?php } else if ($bannerDesktop == 'gradient') {  ?> 

				<?php if (get_field('page_tablet_banner_bg_color_top_gradient')) { ?>

				@media screen and (min-width: 64em) {	

				.banner{background-image:linear-gradient(<?php the_field('page_tablet_banner_bg_color_top_gradient'); ?>, <?php the_field('page_tablet_banner_bg_color_bottom_gradient'); ?>)!important;background-size:cover;height:auto}

				}

		<?php }?>

		

		<?php } else if ($bannerDesktop == 'color') {  ?> 

				<?php if (get_field('page_tablet_banner_bg_color')) { ?>

				@media screen and (min-width: 64em) {	

				.banner{background:#<?php the_field('page_tablet_banner_bg_color'); ?>!important;background-size:cover;height:auto}

				}

				<?php }?>

		

		<?php } else if ($bannerDesktop == 'none') {  ?> 

		

		<?php }  ?>



			<?php if (get_field('page_tablet_banner_bg_select')) { ?>

			/* ------------------------------------------------

					TABLET BACKGROUND 640px - 1023px

			---------------------------------------------------- */

				<?php $bannerTablet = get_field('page_tablet_banner_bg_select');  ?> 

				<?php if ($bannerTablet == 'background') {   ?> 

				<?php if (get_field('page_tablet_banner_image_upload')) { ?>

				<?php // Banner height taken from image height + padding in theme-style.css

				$imageArray = get_field('page_tablet_banner_image_upload'); 

				$imageURL = $imageArray['url']; 

				$imageWidth = $imageArray['width']; 

				$imageHeight = $imageArray['height']; 

				$imageThumbURL = $imageArray['sizes']['thumbnail']; 

				?>

				@media screen and (min-width: 40em) and (max-width: 63.9375em){

				.banner,.bannerinside{background-image:url(<?php echo $imageURL ;?>)!important;background-position:top center;background-repeat:no-repeat;<?php if ( get_field('page_banner_background_height') == true ) { ?>height:<?php echo $imageHeight ;?>px;<?php } else { ?>height:auto;<?php } ?>width:100%;}	

				}

				<?php }?>

		

		<?php } else if ($bannerTablet == 'gradient') {  ?> 

				<?php if (get_field('page_tablet_banner_bg_color_top_gradient')) { ?>

				@media screen and (min-width: 40em) and (max-width: 63.9375em){

				.banner{background-image:linear-gradient(<?php the_field('page_tablet_banner_bg_color_top_gradient'); ?>, <?php the_field('page_tablet_banner_bg_color_bottom_gradient'); ?>)!important;background-size:cover;height:auto}

				}

				

				<?php }?>

		

		<?php } else if ($bannerTablet == 'color') {  ?> 

				<?php if (get_field('page_tablet_banner_bg_color')) { ?>

				@media screen and (min-width: 40em) and (max-width: 63.9375em){.banner{background:<?php the_field('page_tablet_banner_bg_color'); ?>!important;background-size:cover;height:auto}

				}			

				<?php }?>				

		<?php } else if ($bannerTablet == 'none') {  ?> 

		<?php }  ?>	

		<?php }  ?>	

		

		<?php if (get_field('page_mobile_banner_bg_select')) { ?>

		/* ------------------------------------------------

					LANDSCAPE BACKGROUND 375px - 639px

		---------------------------------------------------- */

				<?php $bannerSmall = get_field('page_mobile_banner_bg_select');  ?> 

				<?php if ($bannerSmall == 'background') {   ?> 

				<?php if (get_field('page_mobile_banner_image_upload')) { ?>

				<?php // Banner height taken from image height + padding in theme-style.css

				$imageArray = get_field('page_mobile_banner_image_upload'); 

				$imageURL = $imageArray['url']; 

				$imageWidth = $imageArray['width']; 

				$imageHeight = $imageArray['height']; 

				$imageThumbURL = $imageArray['sizes']['thumbnail']; 

				?>

				@media screen and (min-width: 23.4375em) and (max-width: 39.9375em){

				.banner,.bannerinside{background-image:url(<?php echo $imageURL ;?>)!important;background-position:top center;background-repeat:no-repeat;<?php if ( get_field('page_banner_background_height') == true ) { ?>height:<?php echo $imageHeight ;?>px;<?php } else { ?>height:auto;<?php } ?>width:100%;}	

				}

				<?php }?>

		

		<?php } else if ($bannerSmall == 'gradient') {  ?> 

				<?php if (get_field('page_mobile_banner_bg_color_top_gradient')) { ?>

				@media screen and (min-width: 23.4375em) and (max-width: 39.9375em){

				.banner{background-image:linear-gradient(<?php the_field('page_mobile_banner_bg_color_top_gradient'); ?>, <?php the_field('page_mobile_banner_bg_color_bottom_gradient'); ?>)!important;background-size:cover;height:auto}

				}

				

				<?php }?>

		

		<?php } else if ($bannerSmall == 'color') {  ?> 

				<?php if (get_field('page_mobile_banner_bg_color')) { ?>

				@media screen and (min-width: 23.4375em) and (max-width: 39.9375em){.banner{background:<?php the_field('page_mobile_banner_bg_color') ?>!important;background-size:cover;height:auto}

				}

				

				<?php }?>

				

		<?php } else if ($bannerSmall == 'none') {  ?> 

		<?php }  ?>	

	<?php } ?>

	

	<?php if (get_field('page_xsmall_mobile_banner_bg_select')) { ?>

	/* ------------------------------------------------

					PORTRAIT BACKGROUND 0 - 374px

		---------------------------------------------------- */

				<?php $bannerXsmall = get_field('page_xsmall_mobile_banner_bg_select');  ?> 

				<?php if ($bannerXsmall == 'background') {   ?> 

				<?php if (get_field('page_xsmall_mobile_banner_image_upload')) { ?>

				<?php // Banner height taken from image height + padding in theme-style.css

				$imageArray = get_field('page_xsmall_mobile_banner_image_upload'); 

				$imageURL = $imageArray['url']; 

				$imageWidth = $imageArray['width']; 

				$imageHeight = $imageArray['height']; 

				$imageThumbURL = $imageArray['sizes']['thumbnail']; 

				?>

				@media screen and (max-width: 23.375em){

			.banner,.bannerinside{background-image:url(<?php echo $imageURL ;?>)!important;background-position:top center;background-repeat:no-repeat;<?php if ( get_field('page_banner_background_height') == true ) { ?>height:<?php echo $imageHeight ;?>px;<?php } else { ?>height:auto;<?php } ?>width:100%;}	

				}

				<?php }?>

		

		<?php } else if ($bannerXsmall == 'gradient') {  ?> 

				/* mobile banner bg gradient */

				<?php if (get_field('page_xsmall_mobile_banner_bg_color_top_gradient')) { ?>

				@media screen and (max-width: 23.375em){

				.banner{background-image:linear-gradient(<?php the_field('page_xsmall_mobile_banner_bg_color_top_gradient'); ?>, <?php the_field('page_xsmall_mobile_banner_bg_color_bottom_gradient'); ?>)!important;background-size:cover;height:auto}

				}

				

				<?php }?>

		

		<?php } else if ($bannerXsmall == 'color') {  ?> 

				<?php if (get_field('page_xsmall_mobile_banner_bg_color')) { ?>

				@media screen and (max-width: 23.375em){.banner{background:<?php the_field('page_xsmall_mobile_banner_bg_color'); ?>!important;background-size:cover;height:auto}

				}

				

				<?php }?>

				

		<?php } else if ($bannerXsmall == 'none') {  ?> 

		<?php }  ?>	

	<?php } ?>

/* ------------------------------------------------

END BANNER BACKGROUND

---------------------------------------------------- */

<?php } ?>



<?php if( get_field('page_banner_headline_color') ): ?>

/* headline & breadcrumbs color */

.headline{color:<?php the_field('page_banner_headline_color'); ?>}

.breadcrumbs a, .breadcrumbs li{color:<?php the_field('page_banner_headline_color'); ?>}

<?php endif; ?>

<?php if( get_field('page_banner_headline_text_shadow_color') ): ?>

/* headline & breadcrumbs text shadow */

.breadcrumbs a, .breadcrumbs li,.headline{text-shadow:1px 1px 1px <?php the_field('page_banner_headline_text_shadow_color'); ?>}

<?php endif; ?>

<?php if( get_field('page_banner_subheadline_color') ): ?>

/* subheadline color */

.subheadline{color:<?php the_field('page_banner_subheadline_color'); ?>}

<?php endif; ?>

<?php if( get_field('page_banner_subheadline_text_shadow_color') ): ?>

/* headline text shadow */

.subheadline{text-shadow:1px 1px 1px <?php the_field('page_banner_subheadline_text_shadow_color'); ?>}

<?php endif; ?>



<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>

/* boxed main - not on homepage */

	<?php if ( get_field('global_overlay_content_area_boxed_no_homepage','option') == true ) { ?>

	.home .main-boxed{width:100%;max-width:100%;min-width:100%}

    <?php } ?>

<?php } ?>



<?php if ( get_field('global_footer_display_directions','option') == false ) { ?>

li.directions{display:none;}

<?php } ?>



<?php if ( get_field('global_footer_display_social','option') == false ) { ?>

ul.footer_social, h3.footer_social_header{display:none;}

<?php } ?>



<?php if ( get_field('global_footer_display_email_subscribe','option') == false ) { ?>

.joinList{display:none;}

<?php } ?>

</style>

<?php wp_head(); ?>
</head>

<body id="fouc" <?php if (!is_front_page()) body_class('interior'); ?> <?php body_class(); ?> <?php if ( get_field('page_enable_sidebar') == true ) { ?>id="blog-sidebar"<?php } else { ?>id="no-blog-sidebar"<?php } ?>>

<span id="top"></span>



<!-- *****************************************



		LAYOUT - FULLWIDTH OR BOXED



****************************************** -->



<?php if ( is_front_page() && is_home() ) { ?>

<!-- HOMEPAGE IS SET TO LATEST POSTS -->

	<?php if (get_field('local_page_layout_select')) { ?>



    



                <?php if (get_field('local_page_layout_select')) {  ?>



                <?php $localPageLayout = get_field('local_page_layout_select');?>



                <?php if ($localPageLayout == 'box') { ?>



                <?php echo '<div class="boxed">';?>



                <?php }  else if ($localPageLayout == 'full') { ?>



                <?php echo '<div class="fullwidth">';?>



                <?php	



                } 



                    }



                ?>



    



    <?php } else if (get_field('global_page_layout_selector','option')) { ?>



    



                <?php if (get_field('global_page_layout_selector','option')) { 



                    $globalPageLayout = get_field('global_page_layout_selector','option');



                    if ($globalPageLayout == 'box') { 



                    echo '<div class="boxed">';



                    }  else if ($globalPageLayout == 'full') { 



                    echo '<div class="fullwidth">';



                    } 



                    }



                ?>



    



    



    <?php } else if (get_field('global_blog_layout_selector','option')) { ?>



    



                <?php if (get_field('global_blog_layout_selector','option')) { 



                    $globalBlogLayout = get_field('global_blog_layout_selector','option');



                    if ($globalBlogLayout == 'box') { 



                    echo '<div class="boxed">';



                    }  else if ($globalBlogLayout == 'full') { 



                    echo '<div class="fullwidth">';



                    } 



                    }



                ?>



                



    <?php } else { ?>



    



    <?php } ?>



<?php } elseif ( is_front_page() || is_page() ) {?>

<!-- HOMEPAGE IS SET TO STATIC PAGE -->

		<?php if (get_field('local_page_layout_select')) { ?>



    



                <?php if (get_field('local_page_layout_select')) {  ?>



                <?php $localPageLayout = get_field('local_page_layout_select');?>



                <?php if ($localPageLayout == 'box') { ?>



                <?php echo '<div class="boxed">';?>



                <?php }  else if ($localPageLayout == 'full') { ?>



                <?php echo '<div class="fullwidth">';?>



                <?php	



                } 



                    }



                ?>



    



    <?php } else if (get_field('global_page_layout_selector','option')) { ?>



    



                <?php if (get_field('global_page_layout_selector','option')) { 



                    $globalPageLayout = get_field('global_page_layout_selector','option');



                    if ($globalPageLayout == 'box') { 



                    echo '<div class="boxed">';



                    }  else if ($globalPageLayout == 'full') { 



                    echo '<div class="fullwidth">';



                    } 



                    }



                ?>



  



    <?php } ?>



 <?php } elseif ( is_home() ) { ?>

<!--BLOG PAGE -->

  		<?php if (get_field('global_blog_layout_selector','option')) { 



			$globalBlogLayout = get_field('global_blog_layout_selector','option');



			if ($globalBlogLayout == 'box') { 



			echo '<div class="boxed">';



			}  else if ($globalBlogLayout == 'full') { 



			echo '<div class="fullwidth">';



			} 



			}



     	 ?>



<?php } elseif ( is_archive() || is_search() || is_404() ) { ?>

<!-- IF ARCHIVE, SEARCH or 404 PAGE, INSERT GLOBAL BLOG LAYOUT  -->  

		<?php if (get_field('global_blog_layout_selector','option')) { 



			$globalBlogLayout = get_field('global_blog_layout_selector','option');



			if ($globalBlogLayout == 'box') { 



			echo '<div class="boxed">';



			}  else if ($globalBlogLayout == 'full') { 



			echo '<div class="fullwidth">';



			} 



			}



     	 ?>



<?php } elseif ( is_single() ) { ?>

<!-- IF SINGLE POST PAGE, INSERT GLOBAL BLOG LAYOUT  -->  

		<?php if (get_field('global_blog_layout_selector','option')) { 



			$globalBlogLayout = get_field('global_blog_layout_selector','option');



			if ($globalBlogLayout == 'box') { 



			echo '<div class="boxed">';



			}  else if ($globalBlogLayout == 'full') { 



			echo '<div class="fullwidth">';



			} 



			}



     	 ?>

<!-- IF SINGLE POST PAGE, START ARTICLE BEFORE OVERLAY -->  

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?> itemscope itemtype="http://schema.org/NewsArticle">



<?php  } ?>



<!-- *****************************************



			OVERLAY BEGIN 

(OVERLAY ENDS AFTER BANNER IN PAGE.PHP, INDEX.PHP, SINGLE.PHP, ARCHIVE.PHP, SEARCH.PHP, TERMS.PHP, PRIVACY.PHP)



****************************************** -->

<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>

<div class="overlay">

<?php } else { ?>

<?php } ?>

<!-- ***************************************** 

			MOBILE NAV BUTTONS 

			(CALL US, FIND US, HOURS)

****************************************** -->

<?php if ( get_field( 'global_mobile_buttons_selector','option' ) == true ) { ?>

<?php get_template_part( 'navigation/menu-mobile-buttons' ); ?>

<?php }else{ ?>

<?php } ?>

<!-- *****************************************



			HEADER



****************************************** -->



<?php if ( get_field('global_stickynav_truefalse','option') == true ) { ?>

<!-- STICKY HEADER.  CLOSED BEFORE ENDING <HEAD> TAG.  DO NOT USE WITH SUPERFLY MENU -->
<div class="grid-container" style="position:relative;"><div class="top-contact"><ul><li><a href="tel:8663356235"><i class="fa fa-phone" aria-hidden="true"></i> (866) 335-6235</a></li><li><a href="#" id="livilyChatLink" class="livilyChatButton ClickdeskChatLink" image="false" onclick="return false;" title="Live Chat"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a></li></ul></div></div>
<header class="header" data-sticky-container>

<div data-sticky data-options="marginTop:0;" data-stick-to="top" data-top-anchor="1" style="top:0;width:100%">

<?php } else { ?>

<header class="header">

<?php } ?>





    <!-- *****************************************

    

                NAVIGATION

                

    ****************************************** -->



<?php if (get_field('global_navigation_layout_select','option')) { ?>

<?php $saLayout = get_field('global_navigation_layout_select','option'); ?>

<?php if ($saLayout == 'menu1') { ?>

	<!-- GET MENU 1 --> 

	<?php get_template_part( 'navigation/menu1' ); ?>

    

<?php }  else if ($saLayout == 'menu2') {  ?>

	<!-- GET MENU 2 -->

	<?php get_template_part( 'navigation/menu2' ); ?>

    

<?php } else if ($saLayout == 'menu3') { ?>

<!-- GET MENU 3 -->

	<?php get_template_part( 'navigation/menu3' ); ?>

    

<?php } else if ($saLayout == 'menu4') { ?>

<!-- GET MENU 4 -->

	<?php get_template_part( 'navigation/menu4' ); ?>
	
	

<?php } else { ?>

<?php ; } ?>

<?php } ?>

    

    <?php if ( get_field('global_stickynav_truefalse','option') == true ) { ?>

    <!-- END STICKY CLOSING DIV.  BEGINS AFTER <HEADER> TAG IF STICKY NAV SELECTED -->

		</div>

	<?php } else { ?>

	<?php } ?>

</header>