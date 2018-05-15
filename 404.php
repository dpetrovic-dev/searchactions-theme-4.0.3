<?php get_header(); ?>
<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
    <div class="grid-container error_container">
    
        <div class="small-12 cell">
        
        <h1 class="text-center"><?php _e( 'Uh Oh - This page does not exist!', 'jointswp' ); ?></h1>
        
        <p class="text-center"><?php _e( 'Please try finding your page using the search bar below.', 'jointswp' ); ?>
        
        <img class="img_arrow" src="/wp-content/themes/searchactions/assets/images/arrow-orange.png" width="32" height="50" alt=""/></p>
        
            <?php get_search_form(); ?>
        
        </div>

	</div> <!-- END ROW -->
</main> <!-- end #main -->
<?php get_footer(); ?>





					