<div class="grid-container full">
<div class="menu4-wrapper">
   <!-- *****************************************
                CEILING
    ****************************************** -->
   <?php if ( get_field( 'global_ceiling_truefalse','option' ) ): ?>
         <?php get_template_part( 'navigation/menu-ceiling' ); ?>
	<?php endif; ?>

<!-- *****************************************
                MAIN NAV
    ****************************************** -->
<div class="menu4-container">
    	<div class="logo">	
        <?php if ( get_field( 'global_logo','option' ) ): ?>

                    <?php 

                    $image = get_field('global_logo','option');

                    if( !empty($image) ): ?>

                       <a href="/"><img class="imagecenter" src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/></a>

                    <?php endif; ?>

                <?php else: // field_name returned false ?>

                <a href="/"><?php bloginfo('name'); ?></a>

                <?php endif; // end of if field_name logic ?>
        </div>

        
        <nav>
			<div class="grid-container">
                <div class="top-bar menu4 align-center" id="main-menu">
                    <div class="top-bar-center" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <div class="menu4-main-nav">
                                <?php joints_top_nav(); ?>
                            </div>
                    </div><!-- .top-bar-center -->
			</div><!-- .top-bar -->
	</div><!-- .grid -->
</nav>
</div>
</div>