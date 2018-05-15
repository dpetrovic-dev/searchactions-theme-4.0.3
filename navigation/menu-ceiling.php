
    
    
            <div class="ceiling">
            <div class="grid-container">
            
    			<!-- SHOW SEARCH BOX -->
				<?php if ( get_field('global_ceiling_search_truefalse','option') == true ) { ?>
					   <div class="ceiling_search">
    
                        <div class="search_container">
    
                            <div class="search_wrapper">
    							
                                
                                <!-- <?php
									$searchfordCode = get_field( "global_ceiling_searchford_code","option" ); 
								
									
									echo do_shortcode("$searchfordCode");
								?>-->
                                <?php get_search_form(); ?>
                          
                            </div>
    
                        </div>
    
                </div>
                    
                    <?php } else { ?>
                <?php } ?>
              
    
                <div class="ceiling_nav" data-magellan>
    				<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu' ) ); ?>
    				</nav>
                      <div class="clearfix"></div>
    
                </div>
    
            </div>
    
       </div>