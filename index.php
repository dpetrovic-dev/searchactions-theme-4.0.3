<?php get_header(); ?>
<!-- *****************************************

			BANNER

****************************************** -->
<!-- DESKTOP BANNER  -->

<div class="blog-home-banner banner flex_center bannerinside show-for-large  ">

    <div class="grid-container">

        <div class="small-12 cell">

        <!-- BANNER HEADLINE -->
		<?php if ( ( is_home() && ! is_front_page() ) || ( ! is_home() && is_front_page() ) ) { ?>
		  	<h1 class="headline" itemprop="headline"><?php single_post_title(); ?></h1> 
          <?php  } else { ?>
          	<h1 class="headline" itemprop="headline">Blog</h1> 
		  <?php } ?>
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

         <h1 class="headline">Blog</h1>
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
</div><!-- END OVERLAY -->
<?php } else { ?>
<?php } ?>  
<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
<div class="grid-container">
<div class="grid-x grid-margin-x">  
    <div class="small-12 large-8 cell">  
        <div class="content_sidebar">     
            <div class="post-row" data-equalizer>
                <div class="grid-x grid-margin-x images-shadow latest-blog-articles" data-equalizer data-equalize-on="large"> 
                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>           
                
                <?php get_template_part( 'content/loop', 'archive' ); ?>
                <?php endwhile; ?>	
                <?php joints_page_navi(); ?>
                <?php else : ?>
                <?php get_template_part( 'parts/content', 'missing' ); ?>
                <?php endif; ?>
                </div>
           </div><!-- .post-row -->
        </div>
    </div>
    <aside class="aside-sidebar large-3 large-offset-1 cell show-for-large">
        <div id="sidebar1" class="sidebar" role="complementary"> 
        <?php dynamic_sidebar( 'sidebar1' ); ?>
        </div>
    </aside>
</div>
</div><!-- END ROW -->
</main> <!-- end #main -->
<?php get_footer(); ?>