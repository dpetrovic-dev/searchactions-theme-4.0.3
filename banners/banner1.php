<!-- DESKTOP BANNER  -->

<div class="banner banner1 flex_center show-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">



<div class="grid-container">

<div class="small-12 cell">

<!-- BANNER HEADLINE -->

<?php if( get_field('page_banner_headline') ): ?>

  <h1 class="headline"><?php the_field('page_banner_headline',false,false); ?></h1>

<?php endif; ?>

<!-- END BANNER HEADLINE -->

<!-- BANNER SUB_HEADLINE -->

<?php if( get_field('page_banner_subheadline') ): ?>

	<p class="subheadline"><?php the_field('page_banner_subheadline',false,false); ?></p>

<?php endif; ?>

<!-- END BANNER SUBHEADLINE -->

</div>					

<?php if( get_field('page_banner_cta_text') ): ?>

<!-- CALLS TO ACTION -->

<div class="show-for-large">

<div class="large-12 cell" data-magellan>
<p><a class="cta_btn button banner-cta-1" href="<?php the_field('page_banner_cta_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
<?php if ( get_field('page_banner_cta_add_truefalse') == true ) { ?>
	<?php if (get_field('page_banner_cta_add_selector')) { ?>
    <?php $sacalltoaction = get_field('page_banner_cta_add_selector'); ?>
    <?php if ($sacalltoaction == 'one') { ?>
    <a class="cta_btn button banner-cta-2" href="<?php the_field('page_banner_cta2_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta2_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <div class="clearfix"></div>
    <?php }  else if ($sacalltoaction == 'two') {  ?>
    <a class="cta_btn button banner-cta-2" href="<?php the_field('page_banner_cta2_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta2_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <a class="cta_btn button banner-cta-3" href="<?php the_field('page_banner_cta3_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta3_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <div class="clearfix"></div>
    <?php } else if ($sacalltoaction == 'three') { ?>
     <a class="cta_btn button banner-cta-2" href="<?php the_field('page_banner_cta2_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta2_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <a class="cta_btn button banner-cta-3" href="<?php the_field('page_banner_cta3_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta3_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <a class="cta_btn button banner-cta-4" href="<?php the_field('page_banner_cta4_link',false,false); ?>" title="<?php the_title(); ?> Request"><?php the_field('page_banner_cta4_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>
    <div class="clearfix"></div>
    
    <?php } else { ?>
    
    <?php ; } ?>
    <?php } ?>
<?php } ?>
</p>

</div>

</div>

<!-- END CALLS TO ACTION -->


<?php endif; ?>

</div>

</div>

<!-- END DESKTOP BANNER -->



<!-- MOBILE BANNER  -->

<div class="banner banner1 flex_center hide-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?>  <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

<div class="grid-container">

<div class="small-12 cell">

<!-- BANNER HEADLINE -->

<?php if( get_field('page_banner_headline') ): ?>

  <h1 class="headline"><?php the_field('page_banner_headline',false,false); ?></h1>

<?php endif; ?>

<!-- END BANNER HEADLINE -->

<!-- BANNER SUB_HEADLINE -->

<?php if( get_field('page_banner_subheadline') ): ?>

	<p class="subheadline"><?php the_field('page_banner_subheadline',false,false); ?></p>

<?php endif; ?>

<!-- END BANNER SUBHEADLINE -->

</div>				

<?php if( get_field('page_banner_cta_text') ): ?>



<!-- CALLS TO ACTION -->

<div class="medium_cta hide-for-large">

<div class="medium-12 cell" data-magellan>

<p><a class="cta_btn button" href="<?php the_field('page_banner_cta_link',false,false); ?>" title="<?php the_title(); ?> Appointment"><?php the_field('page_banner_cta_text'); ?> <i class="fa fa-chevron-right"></i></a></p>

</div>

</div>

<!-- CALLS TO ACTION -->

<?php endif; ?>

</div>

</div>

<!-- END MOBILE BANNER -->

