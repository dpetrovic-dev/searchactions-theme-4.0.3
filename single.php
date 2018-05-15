<?php get_header(); ?>
<!-- GET POST TAGS -->
<meta itemprop='keywords' content='<?php $post_tags = get_the_tags();
if ( $post_tags ) {
foreach( $post_tags as $tag ) {
echo $tag->name . ', '; 
}
}
?> '/>
<header class="article-header"> <!-- ARTICLE HEADER -->
<div class="feature-content">
<div class="blog-banner">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'banner', array( 'itemprop' => 'image' ) );
	} else { ?>
    <img src="/wp-content/uploads/bg-default-featured-image.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

<p class="blog-title headline" itemprop="headline"><?php the_title(); ?></p>
</div>
</div><!-- END FEATURE CONTENT -->
</header> <!-- END ARTICLE HEADER -->

<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<div id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
  <div class="grid-container">
   <div class="grid-x grid-x-margin">

    	<!-- BLOG ARTICLE -->
	
    <?php if ( get_field('page_enable_sidebar') == true ) { ?>
          <!-- enable page sidebar -->
        <div class="small-12 large-8 cell">
	<?php } elseif ( get_field('global_page_enable_sidebar','option') == true ) { ?> 
     	<!-- enable global sidebar -->
         <div class="small-12 large-9 cell"> 	
        <?php } else { ?> 
         <!-- no sidebar -->
        <div class="small-12 cell"> 
	<?php }?>
    
     

           <div class="entry-content knowledge-content">
               
				<div class="grid-x grid-padding-x ">
                 

                    <div class="blog-article" itemprop="articleBody">		
                        <div class="article-author">
                        	<div class="author-avatar">
                        	<? echo get_avatar( get_the_author_meta('user_email'), $size = '75'); ?>
                        </div>     
                        	<p>Published on <?php the_time('F j, Y') ?><br><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes" postfix_singular="minute"]');?><br><a href="#author-bio" title="Author Bio" data-smooth-scroll><?php echo get_the_author(); ?></a></p>
                        	<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>" content="<?php the_permalink() ?>" />
                            </div>
                            <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>

                    </div>

 <!-- <h2>Related posts</h2><?php echo do_shortcode("[pt_view id=6369be8gfh tag=GET_CURRENT]"); ?> -->
 </div>
</div>


<?php if ( get_field('page_enable_sidebar') == true ) { ?>
          <!-- enable page sidebar -->
       <?php  echo'<aside class="aside-sidebar large-3 cell show-for-large">';
                            
                            get_sidebar();
                            
                            echo '</aside>';
                 ?>
	<?php } else if ( get_field('global_page_enable_sidebar','option') == true ) { ?> 
     	<!-- enable global sidebar -->
         <?php  echo'<aside class="aside-sidebar large-3 cell show-for-large">'; ?>
                            
			<?php if (get_field('global_page_enable_sidebar','option')== true ) { ?> 
            <?php $saAdminSidebar = get_field('global_page_choose_sidebar','option');  ?> 
              
                <?php if ($saAdminSidebar == 'sidebar1') {   ?>
                  <!-- IF GlOBAL SIDEBAR 1 -->
                        <div id="sidebar1" class="sidebar" role="complementary"> 
                             <?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
                           
                            <?php dynamic_sidebar( 'sidebar1' ); ?>
                            <?php } ?>
                        </div>
                
                <?php } else if ($saAdminSidebar == 'sidebar2') {  ?>
                 <!-- IF GlOBAL SIDEBAR 2 -->
                    <div id="sidebar2" class="sidebar" role="complementary"> 
                         <?php if ( is_active_sidebar( 'sidebar2' ) ) { ?>
                            <?php dynamic_sidebar( 'sidebar2' ); ?>
                            <?php } ?> 
                      </div>      
             
                <?php } else if ($saAdminSidebar == 'sidebar3') {  ?>
                  <!-- IF GlOBAL SIDEBAR 3 -->
                    <div id="sidebar3" class="sidebar" role="complementary"> 
                         <?php if ( is_active_sidebar( 'sidebar3' ) ) { ?>
                            <?php dynamic_sidebar( 'sidebar3' ); ?>
                            <?php } ?> 
                    </div>
               
                <?php } else if ($saAdminSidebar == 'sidebar4') {  ?>
                  <!-- IF GlOBAL SIDEBAR 4 -->
                    <div id="sidebar4" class="sidebar" role="complementary"> 
                        <?php if ( is_active_sidebar( 'sidebar4' ) ) { ?>
                            <?php dynamic_sidebar( 'sidebar4' ); ?>
                            <?php } ?> 
                            
                    </div>        
                 
            
            <?php } else { ?> 
            
            <?php }  ?> 
            <?php } ?>
                           
      <?php   echo '</aside>'; ?>
                            

<?php } else { ?>
<?php } ?>
   
    </div><!-- END GRID X -->
    
    </div><!-- END GRID CONTAINER -->

        

        <!-- AUTHOR CARD -->

         <div class="blog-author" id="author-bio">     

				 <div class="blog-author-card">

                    	<div class="grid-container">

                            <!-- BLOG AUTHOR PIC -->
                        

                                <div class="small-12 cell">

                                 <!-- BLOG AUTHOR PIC -->

                                
                                <?php if ( get_field('global_blog_display_authors_picture','option') == true ) { ?>
									 <!-- BLOG AUTHOR PIC -->
                                     <div class="blog-author-pic">

                                            <span class="author-pic">
												<?php echo get_avatar( get_the_author_meta('email'), '100', '', 'Author Picture' ); ?>
											</span>
											<div class="table">

                                               	 <ul>

                                                    <!-- FACEBOOK -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('facebook',$user_ID) ) : 

                                                    ?>

                                                      <li><a class="facebook" href="<?php the_author_meta('facebook',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                    

                                                     <!-- TWITTER -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('twitter',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="<?php the_author_meta('twitter',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                    

                                                    <!-- LINKEDIN -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('linkedin',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="<?php the_author_meta('linkedin',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                      

                                                      

                                                      <!-- GOOGLE -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('google',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="<?php the_author_meta('google',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                    

                                                      <!-- PINTREST -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('pintrest',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="<?php the_author_meta('pintrest',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-pinterest-square fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                    

                                                    

                                                    <!-- INSTAGRAM -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('instagram',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="<?php the_author_meta('instagram',$user_ID); ?>" rel="nofollow" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                    

                                                    <!-- Email -->

                                                   <?php global $user_ID;

                                                        if ( get_the_author_meta('email',$user_ID) ) : 

                                                    ?>

                                                      <li><a href="mailto:<?php the_author_meta('email',$user_ID); ?>" rel="nofollow"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>    </li>

                                                    <?php endif; ?>

                                                  

                                                </ul>

                                               </div>
                                        </div>
                                    <?php } else { ?>
                                   
                                <?php } ?>

                               
                                    <!-- BYLINE -->

                                    <div class="blog-byline">
                                        <h4>Written by<span class="byline"><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span class="author-name" itemprop="name"><?php the_author(); ?></span></span></span></h4>
                                     <!-- PUBLISHER -->
										<div class="blog-publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
												

                                            <p><?php echo (get_the_author_meta('description')); ?></p>

                                              <p><?php the_author(); ?> frequently blogs for
												<!-- PUBLISHER NAME AND LINK TO GOOGLE+ -->
												<span class="byline" itemprop="name" content="<?php the_field( 'global_company_name', 'option' ) ; ?>">
												<?php if ( get_field( 'global_google' ) ): ?>
													<a rel="publisher" href="<?php the_field( 'global_google', 'option' ) ; ?>" rel="nofollow" target="_blank" /><?php the_field( 'global_company_name', 'option' ) ; ?></a>

                                                                <?php else: ?>

                                                                <?php the_field( 'global_company_name', 'option' ) ; ?>

                                                              <?php endif; ?>  

                                                    </span>  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">Read other articles written by <?php the_author(); ?></a></p>

                                          

                                            <!-- PUBLISHER > LOGO -->

                                            <div class="blog-publisher-logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">

                                                <?php

                                                $imageArray = get_field('global_logo','option'); // Array returned by Advanced Custom Fields

                                                $imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'

                                                $imageURL = $imageArray['url']; // Grab the full size version 

                                                $imageWidth = $imageArray['width']; // Grab, from the array, the 'alt'

                                                $imageHeight = $imageArray['height']; // Grab, from the array, the 'alt'

                                                ?>

                                                <meta itemprop="url" content="<?php echo $imageURL ;?>">

                                                <meta itemprop="width" content="<?php echo $imageWidth;?>">

                                                <meta itemprop="height" content="<?php echo $imageHeight;?>">	

                                            </div>

                                        </div>

                                        <!-- END PUBLISHER -->

                                    </div>

                                   <div class="clearfix"></div>

                                     

                                      <!-- META FIELDS -->

                                    <meta itemprop="name" content="<?php the_field( 'global_company_name', 'option' ) ; ?>">

                                    <meta itemprop="datePublished" content="<?php the_time('F j, Y') ?>"/>

                                    <meta itemprop="dateModified" content="<?php the_modified_date('F j, Y'); ?>"/>

                                </div>

                                <div class="clearfix"></div>

                         </div>

                         

                    </div><!-- END AUTHOR CARD -->

                      

    		</div><!-- END AUTHOR -->

    </div><!-- END CONTENT ROW -->

    
</article> 
<?php get_footer(); ?>