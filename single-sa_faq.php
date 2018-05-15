<?php get_header(); ?>



<!-- *****************************************



			NAVIGATION



****************************************** -->

<?php get_template_part( 'parts/navigation' ); ?>



<!-- *****************************************



			CONTENT



****************************************** -->

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">



<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?> itemscope itemtype="http://schema.org/BlogPosting">



    <header class="article_header"> 

    <!-- GET FEATURED IMAGE -->

		<?php if ( has_post_thumbnail() ) { ?>

        <!-- BLOG IMAGE -->

     	<?php $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );

        $imgurl = $imgdata[0]; // the url of the thumbnail picture

        $imgwidth = $imgdata[1]; // thumbnail's width

        $imgheight = $imgdata[2]; // thumbnail's height ?>

        <div class="banner bannerinside flex_center" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo $imgurl; ?>') 0 0 no-repeat; height:<?php echo $imgheight; ?>px;">

        <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

            <meta itemprop="width" content="<?php echo $imgwidth; ?>">

            <meta itemprop="height" content="<?php echo $imgheight; ?>">

            <meta itemprop="url" content="<?php echo $imgurl; ?>">

          </span>

		 <?php } else { ?>

 <!-- ELSE - GET THEME DEFAULT IMAGE /wp-content/themes/searchactions/assets/images/bg_blog_banner_default.jpg -->

         <div class="banner bannerinside flex_center" style="background: url('<?php get_bloginfo( 'stylesheet_directory' ) ?>/wp-content/themes/searchactions/assets/images/bg_blog_banner_default.jpg') 0 0 no-repeat; height:300px;">

         <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

            <meta itemprop="width" content="1200">

            <meta itemprop="height" content="300">

            <meta itemprop="url" content="<?php get_bloginfo( 'stylesheet_directory' ) ?>/wp-content/themes/searchactions/assets/images/bg_blog_banner_default.jpg">

          </span>

        <?php } ?>

        <!-- BLOG HEADLINE -->

        <h1 class="blog_headline" itemprop="headline"><?php the_title(); ?></h1>

        <p>Published on <?php the_time('F j, Y') ?></p>

        </div>

        

 	</header>





<div class="blog_content">

    <div class="grid-container">

    	<!-- BLOG ARTICLE -->

        <div class="small-12 cell">    

           <div class="entry-content">

             <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>"/>

                

                    <div class="blog_article" itemprop="articleBody">		

                        <?php the_content(); ?>

                    </div>

                    <div class="blog_tags" itemprop="keywords">

            			<h4>Related Keywords</h4>

                    	 <?php

							$tags = get_tags();

							$html = '<ul>';

									foreach ( $tags as $tag ) {

										$tag_link = get_tag_link( $tag->term_id );

												

										$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";

										$html .= "{$tag->name}</a></li>";

									}

							$html .= '</ul>';

							echo $html;

                   		 ?>

            		</div>

            </div>

        </div>

        

        <!-- AUTHOR CARD -->

         <div class="small-12 cell">     

				 <div class="blog_author_card">

                    	<div class="grid-container">

                            <!-- BLOG AUTHOR PIC -->

                                <div class="small-12 large-3 cell">

                                     <div class="blog_author_pic">

                                            <span class="author_pic">

                                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">			                           <?php echo get_avatar( get_the_author_email(), '100', '', 'Author Picture' ); ?>

                                                </a>

                                            </span>

                                        </div>

                                </div>

                        

                                <div class="small-12 large-9 cell">

                                    <!-- BYLINE -->

                                    <div class="blog_byline">

                                        <h4>Written By

                                        <span class="byline">

                                       		<span itemprop="author" itemscope itemtype="https://schema.org/Person">

                                            	<span itemprop="name"> 

													<?php the_author(); ?> 

                                                </span>

                                       		 </span>

                                        </span>

                                        </h4>

                                    </div>

                                    

                                    <!-- PUBLISHER -->

                                    <div class="blog_publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

                                            <p><?php echo (get_the_author_meta('description')); ?>

                                           <?php the_author(); ?> frequently blogs for

                                                <!-- PUBLISHER NAME AND LINK TO GOOGLE+ -->

                                                <span class="byline" itemprop="name" content="<?php the_field( 'global_company_name', 'option' ) ; ?>">

                                                        <?php if ( get_field( 'global_google' ) ): ?>

                                                            <a rel="publisher" href="<?php the_field( 'global_google', 'option' ) ; ?>" target="_blank" />

                                                                <?php the_field( 'global_company_name', 'option' ) ; ?>

                                                            </a>

                                                            <?php else: ?>

                                                            <?php the_field( 'global_company_name', 'option' ) ; ?>

                                                          <?php endif; ?>  

                                                .</span>

                                            </p>

                                        

                                        <!-- PUBLISHER > LOGO -->

                                        <div class="blog_publisher_logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">

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

                                    

                                     

                                      <!-- META FIELDS -->

                                    <meta itemprop="name" content="<?php the_field( 'global_company_name', 'option' ) ; ?>">

                                    <meta itemprop="datePublished" content="<?php the_time('F j, Y') ?>"/>

                                    <meta itemprop="dateModified" content="<?php the_modified_date('F j, Y'); ?>"/>

                                </div>

                         </div>

                    </div><!-- END AUTHOR CARD -->

                    <div class="clearfix"></div>     

    		</div><!-- END AUTHOR CARD -->

    </div><!-- END CONTENT ROW -->

    

    <!-- RELATED POSTS, TAGS, MORE BY THIS AUTHOR -->

    <div class="grid-container related">

    	<!-- TAGS -->

    	<div class="small-12 large-4 cell">                   

            <div class="blog_recent_posts">

            <h4>Latest Posts</h4>

                  <ul>

				  	<?php

					  //https://codex.wordpress.org/Function_Reference/wp_get_recent_posts

							$args = array( 'numberposts' => '5' );

							$recent_posts = wp_get_recent_posts( $args );

							foreach( $recent_posts as $recent ){

								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';

							}

						?>

                  </ul>

            </div>

            

          

        </div>

        

         <!-- RELATED POSTS --> 

        <div class="small-12 large-4 cell">

            <div class="blog_related_posts" itemprop="keywords">

            <h4>Related Posts</h4>

            	<ul>

					<?php

                        //for use in the loop, list 5 post titles related to first tag on current post

                        $tags = wp_get_post_tags($post->ID);

                        if ($tags) {

                        $first_tag = $tags[0]->term_id;

                        $args=array(

                        'tag__in' => array($first_tag),

                        'post__not_in' => array($post->ID),

                        'posts_per_page'=>5,

                        'caller_get_posts'=>1

                        );

                        $my_query = new WP_Query($args);

                        if( $my_query->have_posts() ) {

                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                        

                        <?php

                        endwhile;

                        }

                        wp_reset_query();

                        }

                    ?>

                </ul>

            </div>

        </div>



        <!-- MORE FROM THIS AUTHOR --> 

        <div class="small-12 large-4 cell">

        	 <div class="blog_author_posts" itemprop="keywords">

             <h4>More From <?php the_author(); ?></h4>

            <ul>

				<?php if(get_related_author_posts()) :

					echo get_related_author_posts();

				else :    

					echo 'This author has not published any other articles yet.';

				endif;  ?>

			</ul>

            </div>

        </div>

        

    </div>

</div>

</article>    

    <!-- SIDEBAR -->

<aside>

<div class="grid-container">

<div class="small-12 cell">

<?php get_sidebar(); ?>

</div>

</div>

</aside>

    <!-- END SIDEBAR -->

<?php get_footer(); ?>