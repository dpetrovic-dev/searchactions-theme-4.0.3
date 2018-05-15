<?php get_header(); ?>
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
<div class="entry-content-wrapper">
<?php if ( get_field('page_enable_sidebar') == true ) { ?>
<!--- SIDEBAR  -->

					<?php echo '<div class="grid-container">
					<div class="grid-x grid-margin-x">
					
					<div class="small-12 large-8 cell">
					<div class="content_sidebar">';
                    
                            get_template_part( 'content/content', 'builder' );
    
              echo '</div>
			  </div>';
                            
              echo'<aside class="aside-sidebar large-3 large-offset-1 cell show-for-large">';
                            
                            get_sidebar();
             echo '</aside>';
                            
            echo '</div>
			
			</div>';
	

                    

                ?>


<?php } else { ?>

<?php get_template_part( 'content/content', 'builder' ); ?>
<!-- END SIDEBAR -->
<?php } ?>
</div><!-- .entry-content-wrapper -->
<?php if ( get_field('global_homepage_display_latest_posts') == true ) { ?>
<!-- LATEST BLOG POSTS -->

<section class="latest-posts" id="latestposts">
    <div class="grid-container">
    <div class="grid-x grid-margin-x section-content">
        <div class="small-12 cell">
        	<?php if ( get_field( 'global_homepage_display_latest_posts_title') ) { ?>
				<h2 class="section_title"><!-- <?php the_field('global_homepage_display_latest_posts_title'); ?> -->Learn more about <?php the_title(); ?></h2>
                <?php } else { ?>
                 <h2 class="section_title">Learn more about <?php the_title(); ?></h2>
           <?php }  ?>
        </div>
     </div>
     </div>
     <div class="grid-container">
         <div class="grid-x grid-margin-x section-content images-shadow latest-blog-articles" data-equalizer data-equalize-on="large">
        <?php
		$global_select_category_of_posts_to_display_ids = get_field( 'global_select_category_of_posts_to_display' );
        $args = array( 'numberposts' => 3, 'order'=> 'DSC', 'orderby' => 'date', 'tax_query' => array(array('taxonomy' => 'category','terms' => array($global_select_category_of_posts_to_display_ids [0]),'field' => 'term_id')));
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?> 
            <div class="small-12 large-4 cell">
                <div class="post-wrapper" data-equalizer-watch>
                	<?php if ( has_post_thumbnail() ) { ?>

                    <!-- GET THUMBNAIL -->
                     <div class="blog-post featured-image-bg flex-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.6)), url('<?php the_post_thumbnail_url (); ?>'); background-repeat:no-repeat">
                    	<div class="title">
                        	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div><!-- .featured-image-bg -->
                    <? } else { ?>
                    <!-- GET DEFAULT THUMBNAIL -->
                    <div class="blog-post featured-image-bg flex-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.6)),  url('/wp-content/uploads/thumbnail-default.jpg'); background-repeat:no-repeat">
                        <div class="title">
                            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                         </div>
                    </div><!-- .featured-image-bg -->
				<? } ?>
                    <div class="post-box">
                        <!-- <div class="date">
                        	<p><?php echo get_the_date();?></p>
                        </div> -->
                        <div class="excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div><!-- .post-wrapper -->
                <div class="post-link">
                    <a class="text-gradient" data-hover="Read Article" title="read article" href="<?php the_permalink(); ?>">Read Article <i class="fa fa-caret-right" aria-hidden="true"></i></a>
               </div>
            </div><!-- .cell -->
            <?php endforeach; ?>
            </div><!-- .grid-x -->
        </div><!-- .grid-container -->
</section>
<?php wp_reset_postdata(); ?>

<!-- END LATEST BLOG POSTS -->
<?php } ?>

<?php if ( get_field('display_faqs') == true ) { ?>
<!-- FAQS -->
<section id="faqs">
<div class="grid-container">
 <div class="grid-x grid-margin-x section-content">
<div class="small-12 cell section_header"><h2 class="section_title text-center">Frequently asked questions</h2></div>
</div>
<ul class="grid-x grid-margin-x section-content accordion faq" data-accordion data-allow-all-closed="true">
<?php
$faqs_category_array = get_field('faqs_category');
$args = array( 'post_type' => 'faq', 'numberposts' => -1, 'order'=> 'ASC', 'orderby' => 'date', 'tax_query' => array(array('taxonomy' => 'faq_categories','terms' => array($faqs_category_array [0]),'field' => 'term_id')));
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
		<li class="accordion-item small-12 cell" data-accordion-item itemscope itemtype="http://schema.org/Question">
			<a href="#" class="accordion-title"><span itemprop="text"><?php the_title(); ?></span></a>
			<div class="accordion-content" data-tab-content itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer"><p itemprop="text"><?php echo wp_strip_all_tags( get_the_content() ); ?></p></div>
		</li>
<?php endforeach; ?>	
</ul>
</div><!-- .grid-container -->
</section>
<?php wp_reset_postdata(); ?>

<?php } ?>
<!-- END FAQS -->
<?php endwhile; endif; ?>
</main> <!-- end #main -->

<?php get_footer(); ?>