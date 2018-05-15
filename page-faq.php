<?php get_header();
/*

Template Name: SearchActions FAQ Page

*/
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

<?php if ( get_field('page_enable_sidebar') == true ) { ?>
<!--- SIDEBAR  -->

					<?php echo '<div class="grid-container content_sidebar"><div class="small-12 large-8 cell">';
                    
                            get_template_part( 'content/content', 'faq' );
    
                            echo '</div>';
                            
                            echo'<aside class="aside-sidebar large-3 large-offset-1 cell show-for-large">';
                            
                            get_sidebar();
                            
                            echo '</aside>';
                            
                            echo '</div>';
	

                    

                ?>


<?php } else { ?>

<?php get_template_part( 'content/content', 'faq' ); ?>
<!-- END SIDEBAR -->
<?php } ?>

<?php if ( get_field('global_homepage_display_latest_posts') == true ) { ?>
<!-- LATEST BLOG POSTS -->
<?php if ( is_front_page() ) {?>
<div class="latest-posts-container">
<aside class="latest-posts" >
    <div class="grid-container" data-equalizer>
        <div class="small-12 cell">
        	<?php if ( get_field( 'global_homepage_display_latest_posts_title') ) { ?>
				<h2><?php the_field('global_homepage_display_latest_posts_title'); ?></h2>
                <?php } else { ?>
                 <h2>Latest News &amp; Events</h2>
           <?php }  ?>
        </div>
    <?php
    $args = array( 'numberposts' => 3, 'order'=> 'DSC', 'orderby' => 'date' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?> 
        <div class="small-12 large-4 cell latest-post-box" data-equalizer-watch>
            <div class="box-container">
                <div class="box-wrapper">
                <!-- IF FEATURED IMAGE THUMBNAIL IS SET -->
                <?php if ( get_field( 'page_featured_image_thumbnail' ) ) { ?>
                <?php 
                $image = get_field('page_featured_image_thumbnail');
                if( !empty($image) ): ?>
                
                    <div class="blog-post flex-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.6)), url('<?php echo $image['url']; ?>'); height:<?php echo $image['height'] ;?>px">
                    <?php endif; ?>
                    <?php } else { ?>
                    <!--  IF NO FEATURED IMAGE THUMBNAIL IS SET, USE DEFAULT FEATURED IMAGE  -->
                    <?php 
                    $image = get_field('global_blog_featured_image_thumbnail','option');
                    if( !empty($image) ): ?>             
                    <div class="blog-post flex-center" style="background:url('<?php echo $image['url']; ?>'); height:<?php echo $image['height'] ;?>px">
                    <?php endif; ?>
                    
                    <?php }  ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                    <p class="latest-post-date"><?php the_date(); ?></p>
                    </div><!-- end background -->
                    <div class="latest-post-excerpt">
                    <?php the_excerpt(); ?>
                    </div>               
                    </div>
                <a href="<?php the_permalink(); ?>" class="cta_btn button" title="Read More">Read More <i class="fa fa-caret-right"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</aside>
<?php  } ?>
<!-- END LATEST BLOG POSTS -->
<?php } ?>

<?php endwhile; endif; ?>	

</main> <!-- end #main -->

<?php get_footer(); ?>