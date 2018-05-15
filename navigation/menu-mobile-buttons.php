
<?php if ( get_field('global_mobile_buttons_custom_select','option') ) { ?>
	<?php $saMobileButtons = get_field('global_mobile_buttons_custom_select','option');  ?> 
    <?php if ($saMobileButtons == 'default') {   ?> 
    
<?php if( have_rows('global_mobile_buttons','option') ): ?>
  	<!-- ===============================================================
        		DEFAULT BUTTONS  NEW
        ================================================================= -->
        <div class="mobile_nav <?php if ( get_field( 'global_mobile_buttons_custom_class','option' ) ){ ?><?php the_field('global_mobile_buttons_custom_class','option'); ?>
        <?php } ?>">
            
            <div class="mobile_buttons">
            <div class="grid-x full">
            <?php while ( have_rows('global_mobile_buttons','option') ) : the_row();?>
                <div class="auto cell" data-magellan data-bar-offset="<?php if ( get_field( 'global_stickynav_top_bar_height','option' ) ){ ?><?php the_field('global_stickynav_top_bar_height','option'); ?><?php } ?>">
                 <a href="<?php the_sub_field('global_mobile_buttons_link','option');?>" title="Mobile Button">
                	<i class="fa <?php the_sub_field('global_mobile_buttons_icon','option'); ?>" aria-hidden="true"></i> 
                	<span><?php the_sub_field('global_mobile_buttons_label','option'); ?></span></a>
                 </div>
                  <?php endwhile; ?>
                  <?php if ( is_user_logged_in() ):?>
					    <div class="auto cell" data-magellan data-bar-offset="<?php if ( get_field( 'global_stickynav_top_bar_height','option' ) ){ ?><?php the_field('global_stickynav_top_bar_height','option'); ?><?php } ?>">
                <a href="/wp-login.php?action=logout" title="Mobile Button">
                	<i class="fa fa-sign-out" aria-hidden="true"></i> 
                	<span>Logout</span></a>
                 </div>
					<?php else:?>
						<div class="auto cell" data-magellan data-bar-offset="<?php if ( get_field( 'global_stickynav_top_bar_height','option' ) ){ ?><?php the_field('global_stickynav_top_bar_height','option'); ?><?php } ?>">
                <a href="/wp-admin" title="Mobile Button">
                	<i class="fa fa-sign-in" aria-hidden="true"></i> 
                	<span>Login</span></a>
                 </div>
					<?php endif;?>
                </div>
                </div>
                </div>
<?php endif; ?>


	<?php } else if ($saMobileButtons == 'tab') {  ?>
    
        <!-- ===============================================================
        		TAB BUTTONS 
        ================================================================= -->
        <div class="grid-container full">
            <div class="mobile-nav-logo">
                
                <?php $image = get_field('global_mobile_buttons_tabbed_mobile_logo','option');
                    if( !empty($image) ): ?>
                    <img class="image-center" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" />
                    <?php endif; ?>
    
            </div>
            <div class="mobile_nav <?php if ( get_field( 'global_mobile_buttons_custom_class','option' ) ){ ?><?php the_field('global_mobile_buttons_custom_class','option'); ?><?php } ?>">
                <div class="mobile_buttons">
                    <ul class="tabs mobile_button_tabs grid-x full">
                        <li class="tab-link tabs-title auto cell" data-tab="tab-1"><span><?php the_field('global_mobile_buttons_tabbed_left_tab_label','option'); ?></span><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></li>
                        <li class="tab-link tabs-title auto cell" data-tab="tab-2"><span><?php the_field('global_mobile_buttons_tabbed_middle_tab_label','option'); ?> </span> <i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></li>    
                        <li class="tab-link tabs-title auto cell" data-tab="tab-3"><span><?php the_field('global_mobile_buttons_tabbed_right_tab_label','option'); ?></span><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></li>
                    <div class="clearfix"></div>
                    </ul>
                    <div class="tabs-content">
                    <!-- ======== TAB 1 ======== -->
                        <div id="tab-1" class="tab-content tabs-panel">
                            <div class="tabs_content_wrapper">
                                <div class="grid-container">
                                    <div class="small-12 cell tab-menu">
                                      <?php joints_top_nav(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- ======== TAB 2 ======== -->
                    <div id="tab-2" class="tab-content tabs-panel">
                        <div class="tabs_content_wrapper">
                            <div class="grid-container">
                                <div class="small-12 cell">
                                <?php the_field('global_mobile_buttons_tabbed_middle_content','option'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- ======== TAB 3 ======== -->
                    <div id="tab-3" class="tab-content tabs-panel">
                        <div class="tabs_content_wrapper">
                            <div class="grid-container">
                                <div class="small-12 cell">
                               <?php the_field('global_mobile_buttons_tabbed_right_content','option'); ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>	
        
    <?php } else if ($saMobileButtons == 'custom') {  ?>
    	<!-- ===============================================================
        		CUSTOM BUTTONS 
        ================================================================= -->
    	<div class="mobile_nav <?php if ( get_field( 'global_mobile_buttons_custom_class','option' ) ){ ?><?php the_field('global_mobile_buttons_custom_class','option'); ?>
        <?php } ?>">
        <div class="mobile_buttons">
        <div class="grid-container">
        <?php if ( get_field( 'global_mobile_buttons_custom','option' ) ){ ?>
        <?php the_field('global_mobile_buttons_custom','option'); ?>
        <?php } ?>
        
        </div>
        </div>
        </div>
    <?php } else { ?>
    <?php }  ?> 

        
        
<?php } ?>