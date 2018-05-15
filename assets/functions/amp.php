<?php
//SCHEMA - Change to newsarticle and add publisher logo
add_filter( 'amp_post_template_metadata', 'sa_amp_modify_json_metadata', 10, 2 );
function sa_amp_modify_json_metadata( $metadata, $post ) {
    $metadata['@type'] = 'NewsArticle';
	$image = get_field('global_logo','option');
    $metadata['publisher']['logo'] = array(
        '@type' => 'ImageObject',
        'url' =>  $image['url'],
        'height' => 60,
        'width' => 600,
    );

    return $metadata;
}
// ADD MENU (REF: https://torquemag.io/2016/03/making-amp-wordpress/)
//add_action( 'pre_amp_render_post', function () {
   // add_filter( 'the_content', function( $content ){
     //   $menu_name = 'amp';
     //   $menu = wp_get_nav_menu_object( $menu_name );
     //   if ( ! empty( $menu ) ) {
      //      $menu_items = wp_get_nav_menu_items( $menu->term_id );
       //     $menu_list = sprintf( '<br /><ul id="%s" class="jp-amp-list">Menu: ', esc_attr( 'amp-jp-menu-' . $menu_name ) );
       //     foreach ( $menu_items as $key => $menu_item ) {
        //        $menu_list .= sprintf( '<li><a href="%s">%s</a></li>', amp_get_permalink( $menu_item->object_id ), esc_html( $menu_item->title ) );
        //   }
         //   $menu_list .= '</ul>';
         //   $content .= $menu_list;
       // }
      //  return $content;
   // }, 1000 );
//});
	
//ADD FEATURED IMAGE (REF: https://torquemag.io/2016/03/making-amp-wordpress/)
add_action( 'pre_amp_render_post', 'sa_amp_add_custom_actions' );
function sa_amp_add_custom_actions() {
    add_filter( 'the_content', 'sa_amp_add_featured_image' );
}

function sa_amp_add_featured_image( $content ) {
    if ( has_post_thumbnail() ) {
        // Just add the raw <img /> tag; our sanitizer will take care of it later.
        $image = sprintf( '<p class="sa-featured-image">%s</div></p>', get_the_post_thumbnail() );
        $content = $image . $content;
    }
    return $content;
}

// ADD CONTENT TO FOOTER (REF: https://torquemag.io/2016/03/making-amp-wordpress/)
add_action( 'amp_post_template_footer', 'sa_amp_footer' );

function sa_amp_footer( $amp_template ) {
    $post_id = $amp_template->get( 'post_id' );
    ?>
    
    <footer class="amp-footer">
    
    	<div class="wrapper">
        <!-- LATEST ARTICLES -->
        <div class="box">
        		<h3>Lastest Articles</h3>
            <ul>
            <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <!--<li class="readmore"><?php the_excerpt(__('(more…)')); ?></li> -->
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
            </ul>
        </div>
         <!-- OVERVIEW -->
                <div class="box">
                 <h3>MENU</h3>
                    
                    <!--<?php joints_footer_links(); ?> -->
                    <?php wp_nav_menu( array('menu' => 'Amp') );?>
                    
                </div>
         <!-- LOCATIONS -->       
    		<div class="box">
                	<h3 class="location" id="location">LOCATION</h3>
                    
                    <ul>
                    
                    <li><?php the_field('global_company_address','option'); ?></li>
                    
                    <?php if ( get_field( 'global_company_address2','option' ) ): ?><li><?php the_field('global_company_address2','option'); ?></li><?php endif; ?>
                    
                    <li><?php the_field('global_company_city','option'); ?>, <?php the_field('global_company_state','option'); ?> <?php the_field('global_company_zip','option'); ?></li>
                    
                    <!-- PHONE -->
                    
                    <li>
                    
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    
                    <?php the_field('global_phone_primary','option'); ?>
                    
                    </li>
                    
                    
                    
                    
                    
                    <!--  OTHER PHONE REPEATER -->
                    
                    <?php if( have_rows('global_phone_other','option') ): ?>
                    
                    <?php while ( have_rows('global_phone_other','option') ) : the_row();?>
                    
                    <li><span><?php the_sub_field('global_phone_other_type','option'); ?>:</span><?php the_sub_field('global_phone_other_number','option'); ?></li>
                    
                    <?php endwhile; ?>
                    
                    <?php endif; ?>
                    
                    <!-- TOLL FREE -->
                    
                    <?php if ( get_field( 'global_phone_tollfree','option' ) ): ?>
                    
                    <li>
                    
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    
                    <?php the_field('global_phone_tollfree','option'); ?>
                    
                    </li>
                    
                    <?php endif; ?>
                    
                    <!-- EMAIL -->
                    
                    <?php if ( get_field( 'global_email_address','option' ) ): ?>
                    
                    <li>
                    
                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    
                    <a href="mailto:<?php the_field('global_email_address','option'); ?>"><?php the_field('global_email_address','option'); ?></a>
                    
                    </li>
                    
                    <?php endif; ?>
                    </ul>
                </div>
				<?php if ( get_field('global_footer_display_directions','option') == true ) { ?>
                    <div class="box">
                    <!-- DIRECTIONS -->
                        <h3>DIRECTIONS</h3>
                        <ul>
                        <li class="directions">
                        <?php if ( get_field( 'global_directions_google','option' ) ): ?>
                        
                        
                        <a href="<?php the_field('global_directions_google','option'); ?>" title="Directions on Google Maps" target="_blank">Google Maps</a>
                        
                        <?php endif; ?>
                        
                        <?php if ( get_field( 'global_directions_bing','option' ) ): ?>
                        
                        | <a href="<?php the_field('global_directions_bing','option'); ?>" title="Directions on Bing Maps" target="_blank">Bing Maps</a>
                        
                        <?php endif; ?>
                        
                        <?php if ( get_field( 'global_directions_waze','option' ) ): ?>
                        
                        | <a href="<?php the_field('global_directions_waze','option'); ?>" title="Directions on Waze App" target="_blank">Waze</a>
                        
                        <?php endif; ?>
                        
                        </li>
                        </ul>
                    </div>
                <!-- END DIRECTIONS -->
                <?php } else { ?>
                <?php } ?>
                
        		<!-- HOURS -->
				<?php if( have_rows('global_location_main_hours','option') ): ?>
                <div class="box">
                    <h3 class="hours" id="hours">HOURS</h3>
                    <ul>
                    <?php while ( have_rows('global_location_main_hours','option') ) : the_row();?>
                    <li><span><?php the_sub_field('global_hours_day','option'); ?></span>: <?php the_sub_field('global_hours_open','option'); ?> to <?php the_sub_field('global_hours_close','option'); ?></li>
                    <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                
           <?php if ( get_field('global_footer_display_social') == true ) { ?>
           		<div class="box">
           		 <!-- SOCIAL MEDIA LINKS -->
                    <h3 class="footer_social_header">FOLLOW US</h3>
                    
                    <ul class="footer_social"> 
                    
                    <?php if ( get_field( 'global_facebook','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_facebook','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="facebook">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    
                    
                    <?php if ( get_field( 'global_google','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_google','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="google">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    
                    
                    
                    
                    <?php if ( get_field( 'global_twitter','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_twitter','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="twitter">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    
                    
                    <?php if ( get_field( 'global_linkedin','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_linkedin','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="linkedin">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    
                    
                    
                    
                    <?php if ( get_field( 'global_pintrest','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_pintrest','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="pintrest">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-pintrest fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    
                    
                    <?php if ( get_field( 'global_instagram','option' ) ): ?>
                    
                    <li> 
                    
                    <a href="<?php the_field('global_instagram','option'); ?>" target="_blank">
                    
                    <span class="fa-stack fa-lg" id="instagram">
                    
                    <i class="fa fa-circle fa-stack-2x"></i>
                    
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                    
                    </span>
                    
                    </a>
                    
                    </li>
                    
                    <?php endif; ?> 
                    
                    </ul>
                    <!-- END SOCIAL MEDIA LINKS -->
                    <div class="clearfix"></div>
                    
                    </div>  
					<?php } else { ?>
                    <?php } ?> 
                               
        		</div>
     </footer>
     <div class="row privacy">
     <div class="wrapper">
     <p><?php echo searchactions_copyright(); ?> <?php the_field('global_company_name','option'); ?><br>
        <a href="/privacy" title="Privacy Agreement">Privacy</a> | <a href="/terms-of-service/" title="Terms of Service">Terms of Service</a> | <a href="/sitemap" title="HTML Sitemap">Sitemap</a></p>
      
        </div>
     </div>
<?php if ( get_field( 'global_structured_data', 'option' ) ): ?>
<script type="application/ld+json">
<?php the_field( 'global_structured_data', 'option' ) ; ?> 
</script>
<?php endif; ?> 
     
    <?php
}

// CUSTOM STYLES
add_action( 'amp_post_template_css', 'sa_amp_additional_css_styles' );

function sa_amp_additional_css_styles( $amp_template ) {
    // only CSS here please...
    ?>
    .amp-wp-article-content .sa-featured-image{display:none}
.amp-wp-article-content h2{margin-top:32px}
.amp-wp-article-footer{background:none}
.amp-wp-tax-category, .amp-wp-tax-tag{margin-left:0;margin-right:0;}
.amp-wp-footer {padding:16px 0;}
.amp-wp-footer div{max-width:100%;width:100%}
.amp-wp-footer h2,
.amp-wp-footer p{display:none;}
.amp-wp-footer .back-to-top{left:0;right:0;bottom:0;margin:0;padding:8px 0;text-align:center;}

    @font-face {

    font-family: 'open_sansbold';

    src: url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.eot');

    src: url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.eot?#iefix') format('embedded-opentype'),

	url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.svg#open_sansbold') format('svg'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.woff2') format('woff2'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.woff') format('woff'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-bold-webfont.ttf') format('truetype');

    font-weight: normal;

    font-style: normal;



}

@font-face {

    font-family: 'open_sansregular';

    src: url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.eot');

    src: url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),

	url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.svg#open_sansregular') format('svg'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.woff2') format('woff2'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.woff') format('woff'),

         url('/wp-content/themes/searchactions/assets-custom/fonts/opensans-regular-webfont.ttf') format('truetype');

    font-weight: normal;

    font-style: normal;



}
	body{font-size:1em;padding-bottom:0}
    .clearfix{clear:both}
	/*typography*/
   body, p, a, ul, ul li, span {font-family: "open_sansregular",serif;}
   	h1,h2,h3,h4,h5,h6 {margin-top:0;font-family: "open_sansregular",serif;}
    h1,h2,h3{ text-transform:uppercase;margin-bottom:.5rem; }
    h4,h5,h6{margin-bottom:.5rem;}
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{text-decoration:none;}
    a:hover{opacity:0.8}
    p, ul li{margin-bottom:1rem;}
  	ul{margin:0;padding-left:0}
  	ul li{list-style:none;list-style-image:none;}
  	ul li:last-child{margin-bottom:0}
   
    p,ul, ul li, h1,h2,h3,h4,h5,h6,footer{text-align:center}
    
    /*font size */
    h1,.amp-wp-title{font-size:1.75em;}
    h2{font-size:1.25em}
    h3,h4,h5,h6,p,a,ul li{font-size:1em}
    /*header*/
    amp-img{margin:0 auto;}
    nav.amp-wp-title-bar {
        padding: 12px 0;
        background: #fafafa;
        border-bottom:1px solid #e8e8e8;
    }
    nav.amp-wp-title-bar a {
        background-image: url( '/wp-content/uploads/wardius_logo-1-1.png' );
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        height: 87px;
        margin:0 auto;
        width: 300px;
        text-indent: -9999px;
    }
    /* NAV*/
    nav .logo{background:#fafafa;border-bottom:1px solid #e8e8e8; height:auto;padding:1rem 0}
    	nav .logo a{ display: block;margin:0 auto; width:300px;}
    .mobile_nav {border-top:1px solid #e8e8e8;border-bottom:1px solid #e8e8e8;display:block;height:auto;padding:0;width:100%}
    .mobile_buttons .cell{border-right:1px solid #e8e8e8; float:left;height:100px;width:33.3333px}
    .mobile_buttons .cell:last-child{border-right:none;}
    .mobile_buttons a{color:#c1c1c1;line-height:3.5rem}
    /* CONTENT */
    .grid-container {clear:both;display:block;border-bottom:1px solid #e8e8e8;}
    	.grid-container.privacy, .grid-container.footer{margin-bottom:0}
    .wrapper{padding:2.625rem 0 2.625rem 0}
    .box{border-bottom:1px solid #e8e8e8;margin-bottom:2.625rem;padding-bottom:2.625rem}
        .box:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
        
     /* FOOTER */
     footer{background:background: rgba(232,232,232,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(232,232,232,1) 0%, rgba(255,255,255,1) 0%, rgba(232,232,232,1) 100%);

background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(232,232,232,1)), color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(232,232,232,1)));

background: -webkit-radial-gradient(center, ellipse cover, rgba(232,232,232,1) 0%, rgba(255,255,255,1) 0%, rgba(232,232,232,1) 100%);

background: -o-radial-gradient(center, ellipse cover, rgba(232,232,232,1) 0%, rgba(255,255,255,1) 0%, rgba(232,232,232,1) 100%);

background: -ms-radial-gradient(center, ellipse cover, rgba(232,232,232,1) 0%, rgba(255,255,255,1) 0%, rgba(232,232,232,1) 100%);

background: radial-gradient(ellipse at center, rgba(232,232,232,1) 0%, rgba(255,255,255,1) 0%, rgba(232,232,232,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e8e8e8', endColorstr='#e8e8e8', GradientType=1 );}
		footer a{text-decoration:none}
        footer p,footer ul li{margin-bottom:0}
        footer ul.sub-menu{margin: 0;padding: 0 0 .5rem 0}
        footer ul.sub-menu li{margin-bottom:0}
        footer ul.sub-menu li a{color:#666}
        .privacy{background:#000;padding-bottom:0}
    	 .privacy p,.privacy a{color:#e8e8e8;font-size: 0.85em;margin-bottom:0 }
         .privacy  .wrapper{padding:.5rem 0}
        .privacy a{text-decoration:none;}
    	
    /* SOCIAL SHARING */
    .searchactions-social{}
    
    .searchactions-social .fa{padding-right:.25rem;color:#fff;} 

.searchactions-social a{font-size:.75rem;margin-right:.5rem}

.searchactions-link {

    padding: 2px 8px 4px 8px;

    color: white;

    border-radius: 2px;

    margin-right: 2px;

    cursor: pointer;

    -moz-background-clip: padding;

    -webkit-background-clip: padding-box;

    box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);

    -moz-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);

    -webkit-box-shadow: inset 0 -3px 0 rgba(0,0,0,.2);

    margin-top: 2px;

    display: inline-block;

}

 

.searchactions-link:hover,.searchactions-link:active {

    color: white;

}

 

.searchactions-twitter {

    background: #00aced;

}

 

.searchactions-twitter:hover,.searchactions-twitter:active {

    background: #0084b4;

}

 

.searchactions-facebook {

    background: #3B5997;

}

 

.searchactions-facebook:hover,.searchactions-facebook:active {

    background: #2d4372;

}

 

.searchactions-googleplus {

    background: #D64937;

}

 

.searchactions-googleplus:hover,.searchactions-googleplus:active {

    background: #b53525;

}

 

.searchactions-buffer {

    background: #444;

}

 

.searchactions-buffer:hover,.searchactions-buffer:active {

    background: #222;

}

 

.searchactions-pinterest {

    background: #bd081c;

}

 

.searchactions-pinterest:hover,.searchactions-pinterest:active {

    background: #bd081c;

}

 

.searchactions-linkedin {

    background: #0074A1;

}

 

.searchactions-linkedin:hover,.searchactions-linkedin:active {

    background: #006288;

}

 

.searchactions-whatsapp {

    background: #43d854;

}

 

.searchactions-whatsapp:hover,.searchactions-whatsapp:active {

    background: #009688;

}



.searchactions-reddit {

    background:#000;

}

 

.searchactions-reddit:hover,.searchactions-reddit:active {

    background: #222;

}

.searchactions-stumbleupon {

    background:#EB4823;

}

 

.searchactions-stumbleupon:hover,.searchactions-stumbleupon:active {

    opacity:0.7

}

 

.searchactions-social {

 

    -webkit-font-smoothing: antialiased;



}

/*********************************************************************

-------------  SOCIAL MEDIA ICONS

**********************************************************************/



/* Pinterest */

.fa-pinterest, .fa-pinterest-square{

    color: #910101;

}



/* Facebook */

.fa-facebook, .fa-facebook-square{

    color: #3b5998;

}



/* Twitter */

.fa-twitter, .fa-twitter-square{

    color: #00a0d1;

}



/* Vimeo (blue) */

.fa-vimeo, .fa-vimeo-square{

    color: #44bbff;

}



/* Vimeo (green) */

.fa-vimeo.alt-color, .fa-vimeo-square.alt-color{

    color: #aad450;

}



/* Tumblr */

.fa-tumblr, .fa-tumblr-square{

    color: #34526f;

}



/* Youtube */

.fa-youtube, .fa-youtube-square{

    color: #c4302b;

}



/* LinkedIn */

.fa-linkedin, .fa-linkedin-square{

    color: #4875B4;

}



/* Google + */

.fa-google-plus, .fa-google-plus-square{

    color: #C63D2D;

}



/* Foursquare */

.fa-foursquare, .fa-foursquare-square{

    color: #8FD400;

}



/* Instagram */

.fa-instagram, .fa-instagram-square{

    color: #4E433C;

}
@media screen and (max-width:63.9375em){
/* SOCIAL SHARING */

.blog_content h4{text-align:center}

.searchactions-social a {margin-bottom:1rem;width:46%;}

.searchactions-social a{margin-right:0;padding:3% 2%;text-align:center;}

.searchactions-social a:nth-child(even){float:right}
}
    <?php
}