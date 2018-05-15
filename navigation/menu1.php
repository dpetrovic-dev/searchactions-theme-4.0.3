<div class="menu1-wrapper <?php if ( get_field('global_floatingnav_truefalse','option') == true ) { ?>floating<?php } ?>">

<!-- *****************************************
                MAIN NAV
    ****************************************** -->

   <nav>
	<div class="grid-container">
        <div class="top-bar menu1" id="main-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
          
           
            <div class="top-bar-left">
    
                <ul class="menu">        
    
                    <?php if ( get_field( 'global_logo','option' ) ): ?>
    
                        <?php 
    
                        $image = get_field('global_logo','option');
    
                        if( !empty($image) ): ?>
    
                            <li><a href="/"><img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/></a></li>
    
                        <?php endif; ?>
    
                    <?php else: // field_name returned false ?>
    
                    <li><a href="/"><?php bloginfo('name'); ?></a></li>
    
                    <?php endif; // end of if field_name logic ?>
    
                </ul>
    
            </div>
    
            <div class="top-bar-right">
    
                <?php joints_top_nav(); ?>
    
            </div>
	</div><!-- .top-bar -->
	</div><!-- .grid -->
</nav>


