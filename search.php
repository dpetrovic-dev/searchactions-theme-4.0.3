<?php get_header(); ?>
<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
<div class="grid-container small-up-1 medium-up-2 large-up-3 grid">			
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="cell">

<?php endwhile; ?>	



<div class="search_result">					

	<div class="article-header">

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

	</div>

				
	<div class="entry-content">
		<?php the_excerpt(); ?>
			 <a class="button cta_btn" href="<?php the_permalink() ?>">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
	 </div>

</div>	<!-- END POST -->				    						

 </div><!-- END COLUMN -->

<?php joints_page_navi(); ?>



<?php endif; ?>



</div><!-- END ROW -->
</main> <!-- end #main -->
<?php get_footer(); ?>

