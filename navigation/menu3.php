<div class="menu3-wrapper">
<!-- *****************************************

         MENU 2:  Cieling & main menu centered vertically with logo
                
    ****************************************** -->

	<nav>
	<div class="grid-container">
    <div class="top-bar menu3" id="main-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
    
    <!-- *****************************************
              TOP BAR LEFT:  LOGO
    ****************************************** -->

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
        
		<!-- *****************************************
              TOP BAR RIGHT:  CEILING AND FLOOR
  		  ****************************************** -->
        <div class="top-bar-right">

        <!-- *****************************************
                        CEILING
            ****************************************** -->
            
            
                 <?php get_template_part( 'navigation/menu-ceiling' ); ?>
       
         
            
  		<!-- *****************************************
                       FLOOR (MAIN MENU)
            ****************************************** -->
            <div class="floor">
            <div class="grid-container">
			<?php joints_top_nav(); ?>
             </div>
            </div>
           
        </div><!-- .top-bar-right -->
	</div><!-- .top-bar -->
	</div><!-- .grid -->
</nav>