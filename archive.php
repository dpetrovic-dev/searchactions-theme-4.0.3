<?php get_header(); ?>
<!-- *****************************************

			BANNER

****************************************** -->
<!-- DESKTOP BANNER  -->

<div class="blog-home-banner banner flex_center bannerinside show-for-large  ">

    <div class="grid-container">

        <div class="small-12 cell">

        <!-- BANNER HEADLINE -->

        
          <h1 class="headline">
		  <?php if ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: <span>%s</span>', '' ), get_the_date() ); ?>
    <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: <span>%s</span>', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
    <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: <span>%s</span>', '' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
    <?php else : ?>
        <?php get_the_archive_title (); ?> <?php _e( 'Archives', '' ); ?>
    <?php endif; ?></h1>

        
        <!-- END BANNER HEADLINE -->

        <!-- BANNER SUB_HEADLINE -->

        
        <!-- END BANNER SUBHEADLINE -->


        <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); { ?>
        <?php } ?>   

        </div>						

    </div>

</div>


<!-- END DESKTOP BANNER -->



<!-- MOBILE BANNER  -->

<div class="blog-home-banner banner bannerinside flex_center hide-for-large">

    <div class="grid-container">

        <div class="small-12 cell">

        <!-- BANNER HEADLINE -->

          <h1 class="headline">
		  <?php if ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: <span>%s</span>', '' ), get_the_date() ); ?>
    <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: <span>%s</span>', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
    <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: <span>%s</span>', '' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
    <?php else : ?>
        <?php get_the_archive_title (); ?> <?php _e( 'Archives', '' ); ?>
    <?php endif; ?></h1>
		 <!-- END BANNER HEADLINE -->
		 <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); { ?>
        <?php } ?>   

        </div>

    </div>

</div>

<!-- END MOBILE BANNER -->
<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
<section class="latest-posts" id="latestposts">
    <div class="grid-container">
    <div class="post-row">
    <div class="grid-x grid-margin-x images-shadow latest-blog-articles" data-equalizer data-equalize-on="large">     
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
            <?php get_template_part( 'content/loop', 'archive' ); ?>
           <?php endwhile; ?>	
           <?php joints_page_navi(); ?>
           <?php else : ?>
            <?php get_template_part( 'parts/content', 'missing' ); ?>
            <?php endif; ?>
       </div>     
    </div><!-- END ROW -->
    </div>
</section>
</main> <!-- end #main -->
<?php get_footer(); ?>