

<?php 

/*

Template Name: SearchActions Sitemap Page

*/

get_header(); ?>


<!-- *****************************************

			BANNER

****************************************** -->

<?php

    if (get_field('page_banner_select') == 'yes' ) { 



        $saBannerLayout = get_field('page_banner_layout'); 



        if ($saBannerLayout === 'banner1') { 

            get_template_part( 'banners/banner1');



        } else if ($saBannerLayout === 'banner2') { 

            get_template_part( 'banners/banner2');



        } else if ($saBannerLayout === 'banner3') { 

            get_template_part( 'banners/banner3');



        }
		
		else if ($saBannerLayout === 'banner4') { 

            get_template_part( 'banners/banner4');



        }


		else if ($saBannerLayout === 'bannerinside') { 

            get_template_part( 'banners/bannerinside' );



        } 

    }

    ?>
<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
<div class="grid-container">
<div class="grid-x">
<div class="small-12 cell sitemap_content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php echo do_shortcode('[wpseo_html_sitemap]'); ?>
</div>
</div>

<?php wp_link_pages(); ?>

<?php endwhile; endif; ?>	

</div><!-- END ROW -->

<!-- <?php get_sidebar(); ?> -->
</main> <!-- end #main -->
<?php get_footer(); ?>



