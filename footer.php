<?php if ( get_field( 'global_footer_display_call_to_action','option') ==true ): ?>
<!-- CUSTOM CTA OR PREDESIGNED -->
		<?php if ( get_field( 'global_footer_display_custom_call_to_action_truefalse','option') ==true ){ ?>
                
                <!-- CUSTOM CTA -->
                <?php if ( get_field( 'global_footer_display_custom_call_to_action','option' ) ): ?>
               		<?php the_field('global_footer_display_custom_call_to_action','option'); ?>
                <?php endif; ?>
                <!-- END CUSTOM CTA -->
                
        <?php } else { ?>
        	<!-- PREDESIGNED CTA -->
           <section class="cta_bar">
            <div class="grid-container align-center">
                <div class="small-12 cell">
					<?php the_field('global_footer_call_to_action','option'); ?>
                    
                    <?php if ( get_field( 'global_footer_call_to_action_headline','option' ) ): ?>
                    <h2><?php the_field('global_footer_call_to_action_headline','option',false,false); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field( 'global_footer_call_to_action_subheadline','option' ) ): ?>
                    <p><?php the_field('global_footer_call_to_action_subheadline','option',false,false); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid-container align-center">
                <div class="small-12 medium-12 large-12 cell">
                  <?php if ( get_field( 'global_footer_call_to_action_text','option' ) ): ?>
                        <a class="cta_btn button" href="<?php the_field('global_footer_call_to_action_link','option',false,false); ?>"><?php the_field('global_footer_call_to_action_text','option',false,false); ?> <i class="fa fa-caret-right"></i></a>
                    <?php endif; ?>
                </div>
    		</div>
         </section>
     <?php } ?>
 <!-- END CUSTOM CTA OR PREDESIGNED -->
<?php endif; ?>
<?php
    if (get_field('global_footer_selector','option')) { ?>



      <?php  $selection = get_field('global_footer_selector','option'); ?>



     <?php   if ($selection === 'default') { ?>
<footer class="footer-default">
                    <!-- DEFAULT FOOTER -->
                    <div class="grid-container footer">
                    	<div class="grid-x align-center">
                            <div class="cell large-3">
                            
                            <!-- LOCATION -->
                            
                            <h3 class="location" id="location" data-magellan data-bar-offset="<?php if ( get_field( 'global_stickynav_top_bar_height','option' ) ){ ?><?php the_field('global_stickynav_top_bar_height','option'); ?>"<?php } ?>>LOCATION</h3>
                            
                            <ul>
                            
                            <li><?php the_field('global_company_address','option'); ?></li>
                            
                            <?php if ( get_field( 'global_company_address2','option' ) ): ?><li><?php the_field('global_company_address2','option'); ?></li><?php endif; ?>
                            
                            <li><?php the_field('global_company_city','option'); ?>, <?php the_field('global_company_state','option'); ?> <?php the_field('global_company_zip','option'); ?></li>
                            
                            <!-- PHONE -->
                            
                            <li>
                            
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            
                            <a href="tel:+1<?php the_field('global_phone_primary','option'); ?>"><?php the_field('global_phone_primary','option'); ?></a>
                            
                            </li>
                            
                            
                            
                            
                            
                            <!--  OTHER PHONE REPEATER -->
                            
                             <?php if ( get_field( 'global_fax','option' ) ) { ?>
                            
                            <li><span><i class="fa fa-fax" aria-hidden="true"></i> <?php the_field('global_fax','option'); ?></li>
                            
                            <?php }  ?>
                            
                            <!-- TOLL FREE -->
                            
                            <?php if ( get_field( 'global_phone_tollfree','option' ) ){ ?>
                            
                            <li>
                            
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            
                            <a href="tel:+1<?php the_field('global_phone_tollfree','option'); ?>" title="phone number"><?php the_field('global_phone_tollfree','option'); ?></a>
                            
                            </li>
                            
                            <?php }  ?>
                            
                            <!-- EMAIL -->
                            
                            <?php if ( get_field( 'global_email_address','option' ) ){ ?>
                            
                            <li>
                            
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            
                            <a href="mailto:<?php the_field('global_email_address','option'); ?>" title="email address"><?php the_field('global_email_address','option'); ?></a>
                            
                            </li>
                            
                            <?php }  ?>
                            
                            
                            <?php if ( get_field('global_footer_display_directions','option') == true ) { ?>
                            <!-- DIRECTIONS -->
                            <li class="directions">
                            
                            <h3>DIRECTIONS:</h3>
                            
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
                            <!-- END DIRECTIONS -->
                            <?php } else { ?>
                            <?php } ?>
                            </ul>
                            
                            
                            <?php if ( get_field('global_footer_display_social','option') == true ) { ?>
                            <!-- SOCIAL MEDIA LINKS -->
                            <h3 class="footer-social-header">FOLLOW US</h3>
                            
                            <ul class="footer-social"> 
                            
                            <?php if ( get_field( 'global_facebook','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_facebook','option'); ?>" target="_blank" title="Facebook" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="facebook">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-facebook fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_google','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_google','option'); ?>" target="_blank" title="Google" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="google">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-google fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            
                            
                            <?php if ( get_field( 'global_twitter','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_twitter','option'); ?>" target="_blank" title="Twitter" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="twitter">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-twitter fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_linkedin','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_linkedin','option'); ?>" target="_blank" title="LinkedIN" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="linkedin">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            
                            
                            <?php if ( get_field( 'global_pinterest','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_pinterest','option'); ?>" target="_blank" title="Pintrest" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="pinterest">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-pinterest fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_instagram','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_instagram','option'); ?>" target="_blank" title="Instagram" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="instagram">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-instagram fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            </ul>
                            <!-- END SOCIAL MEDIA LINKS -->
                            <?php } else { ?>
                            <?php } ?>
                            <div class="clearfix"></div>
                            
                            </div>
                        
                        
                        
                        <!-- PAGES -->
                        
                            <div class="cell large-3 footer-hours">
                            
                            <!-- HOURS -->
                            
                            <h3 class="hours" id="hours">HOURS</h3>
                            
                            <ul>
                            
                            <?php if( have_rows('global_location_main_hours','option') ): ?>
                            
                            <?php while ( have_rows('global_location_main_hours','option') ) : the_row();?>
                            
                            <li><span><?php the_sub_field('global_hours_day','option'); ?></span>: <?php the_sub_field('global_hours_open','option'); ?> to <?php the_sub_field('global_hours_close','option'); ?></li>
                            
                            <?php endwhile; ?>
                            
                            <?php endif; ?>
                            
                            </ul>
                            
                            </div>
                        
                        
                        
                        <!-- OVERVIEW -->
                        
                            <div class="cell large-3 footer_about">
                            
                            <h3>OVERVIEW</h3>
                            
                            <?php joints_footer_links(); ?>
                            
                            </div>
                        
                        
                        
                        <!-- RECENT POSTS, SOCIAL & SUBSCRIBE-->
                        
                            <div class="cell large-3 footer_recent">
                            
                            
                            
                            <h3>HELPFUL RESOURCES</h3>
                            
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
                            
                            <?php if ( get_field('global_footer_display_email_subscribe','option') == true ) { ?>
                            <!-- JOIN EMAIL LIST -->
                            <div class="joinList">
                            
                            <h3 class="news">JOIN OUR EMAIL LIST</h3>
                            
                            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
                           
                            </div>
                            <?php } else { ?>
                            <!-- END JOIN EMAIL LIST -->
                            <?php } ?>
                            
                            </div>
                        </div><!-- END GRID-X
                    </div><!-- END GRID CONTAINER -->
                    <!-- END DEFAULT FOOTER -->

     <?php   } else if ($selection === 'widgets') { ?>
					
					<!-- WIDGET FOOTER -->
                    <footer class="footer-widgets">
                    <div class="grid-container footer">
                        <div class="grid-x align-center">
                             <!-- FOOTER 1 -->
                            <?php if(is_active_sidebar('footer1')){ ?>
                            <div class="cell large-3">
                            <?php dynamic_sidebar('footer1'); ?>
                            </div>
                            <?php } ?>
                            <!-- FOOTER 2 -->
                            <?php if(is_active_sidebar('footer2')){ ?>
                            <div class="cell large-3">
                            <?php dynamic_sidebar('footer2'); ?>
                            </div>
                            <?php } ?>
                            <!-- FOOTER 3 -->
                            <?php if(is_active_sidebar('footer3')){ ?>
                            <div class="cell large-3">
                            <?php dynamic_sidebar('footer3'); ?>
                            </div>
                            <?php } ?>
                           <!-- FOOTER 4 -->
                            <?php if(is_active_sidebar('footer4')){ ?>
                            <div class="cell large-3">
                            <?php dynamic_sidebar('footer4'); ?>
                            </div>
                            <?php } ?>
                         </div>
                    </div> <!-- END ROW -->
                    
                    <!-- END WIDGET FOOTER -->

      <?php   } else if ($selection === 'custom') { ?>
					
					<!-- WIDGET FOOTER -->
                    <footer class="footer-custom">
                    <div class="grid-container footer">
						<div class="grid-x align-center">
							<?php if ( get_field( 'global_footer_custom_footer','option' ) ) { ?>
                            <?php the_field('global_footer_custom_footer','option',false, false); ?>
                            <?php }  ?>
						</div>
                    </div> <!-- END ROW -->
                    
                    <!-- END WIDGET FOOTER -->

      <?php  } else {?>

           

    <?php } ?>
    <?php } ?>
</footer>
 
 <?php if ( get_field('global_footer_display_social_media_bar','option') == true ) { ?>
        <div class="social-media-bar">
        <div class="grid-container">
        <div class="small-12 cell">
         
                            <!-- SOCIAL MEDIA LINKS -->
                            <h3>FOLLOW US</h3>
                            
                            <ul class="footer-social"> 
                            
                            <?php if ( get_field( 'global_facebook','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_facebook','option'); ?>" target="_blank" title="facebook" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="facebook">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-facebook fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_google','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_google','option'); ?>" target="_blank" title="Google" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="google">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-google fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            
                            
                            <?php if ( get_field( 'global_twitter','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_twitter','option'); ?>" target="_blank" title="Twitter" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="twitter">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-twitter fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_linkedin','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_linkedin','option'); ?>" target="_blank" title="LinkedIN" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="linkedin">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            
                            
                            <?php if ( get_field( 'global_pinterest','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_pinterest','option'); ?>" target="_blank" title="Pintrest" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="pinterest">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-pinterest fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            
                            
                            <?php if ( get_field( 'global_instagram','option' ) ): ?>
                            
                            <li> 
                            
                            <a href="<?php the_field('global_instagram','option'); ?>" target="_blank" title="Instagram" rel="nofollow">
                            
                            <span class="fa-stack fa-lg" id="instagram">
                            
                            <i class="fa fa-circle fa-stack-2x"></i>
                            
                            <i class="fa fa-instagram fa-stack-1x fa-inverse" aria-hidden="true"></i>
                            
                            </span>
                            
                            </a>
                            
                            </li>
                            
                            <?php endif; ?> 
                            
                            </ul>
                            <!-- END SOCIAL MEDIA LINKS -->
                            <div class="clearfix"></div>
                            
                            </div>
            </div>  
            
            </div>
			<?php } ?>

<div class="copyright">

<div class="grid-container">
<div class="small-12 large-6 cell">
<a href="<?php echo get_site_url(); ?>/privacy/" title="Privacy Policy">Privacy</a> | <a href="<?php echo get_site_url(); ?>/terms-of-service/" title="Terms of Service">Terms</a> | <a href="<?php echo get_site_url(); ?>/sitemap/" title="HTML Sitemap">Sitemap</a> | <a href="<?php echo get_site_url(); ?>/seals/" title="Seals of Excellence" rel="nofollow">Seals</a></p>
</div>
<div class="small-12 large-6 cell text-right">
<p><?php echo searchactions_copyright(); ?> <?php the_field('global_company_name','option'); ?></p>
</div>

<div id="back-top">

<div class="back_top_container" data-magellan data-bar-offset="67">

  <a href="#top" title="Back to Top"> <i class="fa fa-chevron-up"></i> </a>

  </div>

</div>

</div>

</div>

</div><!-- END LAYOUT CONTAINER (BOXED/FULL) -->

</div>



<?php if ( get_field( 'global_insert_code_footer','option' ) ) { ?>
<?php the_field('global_insert_code_footer','option'); ?>
<?php }  ?>
<?php 
    
add_action('acf/input/admin_footer', 'my_acf_admin_footer');

function my_acf_admin_footer() {
    
    ?>
    
    <?php
    
}

?>

<!-- Mobile Tab Buttons, Scroll up, Remove <p> tags, Remove itemprop="url" from a tags without an href element, using a # or a tel link, Foundation fixes -->
<?php wp_footer(); ?>
<script defer type="text/javascript">
$(document).ready(function(){/*$('#menu-main li#menu-item-111').attr("data-magellan",""),$('#menu-main li#menu-item-111').attr("data-offset","0"),*/$(".taptap-by-bonfire ul li a").attr("itemprop","url"),$('a[href^="mailto:"]').removeAttr("itemprop","url"),$('a[href^="tel:"]').removeAttr("itemprop","url"),$('a[href="#"]').removeAttr("itemprop","url"),$('a[href=""]').removeAttr("itemprop","url"),$(".footer_recent ul li a").attr("itemprop","url"),$(".footer_about ul li a").attr("itemprop","url")});jQuery("ul.tabs li").click(function(){var a=jQuery(this).attr("data-tab");jQuery("ul.tabs li").not("[data-tab="+a+"]").removeClass("current"),jQuery(".tab-content:not(#"+a+")").removeClass("current"),jQuery(this).toggleClass("current"),jQuery("#"+a).toggleClass("current")}),$(document).ready(function(){$("#back-top").hide(),$(function(){$(window).scroll(function(){$(this).scrollTop()>80?$("#back-top").fadeIn():$("#back-top").fadeOut()}),$("#back-top .fi-arrow-up").click(function(){return $("body,html").animate({scrollTop:0},800),!1})})}),$("p > img").unwrap(),jQuery(document).ready(function(a){jQuery(document).foundation(),jQuery(".accordion p:empty, .orbit p:empty").remove(),jQuery(".archive-grid .cell").last().addClass("end"),jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){jQuery(this).innerWidth(),jQuery(this).innerHeight()>1.5?jQuery(this).wrap("<div class='widescreen flex-video'/>"):jQuery(this).wrap("<div class='flex-video'/>")})});
</script>
</body>

</html>