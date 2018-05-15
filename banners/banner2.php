<!-- DESKTOP BANNER -->

<div class="banner banner2 show-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

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

<?php if( get_field('page_banner_bullet_point_1') ): ?>

	<ul class="show-for-large">

	<li><i class="fa fa-check"></i> <?php the_field('page_banner_bullet_point_1',false,false); ?></li>

    <li><i class="fa fa-check"></i> <?php the_field('page_banner_bullet_point_2',false,false); ?></li>

    <li><i class="fa fa-check"></i> <?php the_field('page_banner_bullet_point_3',false,false); ?></li>

    </ul>

    <div class="hide-for-large">

        <div class="grid-container">

            <div class="small-2 cell"><i class="fa fa-check"></i></div>

            <div class="small-10 cell"> <?php the_field('page_banner_bullet_point_1',false,false); ?></div>

            

            <div class="small-2 cell"><i class="fa fa-check"></i></div>

            <div class="small-10 cell"> <?php the_field('page_banner_bullet_point_2',false,false); ?></div>

            

            <div class="small-2 cell"><i class="fa fa-check"></i></div>

            <div class="small-10 cell"> <?php the_field('page_banner_bullet_point_3',false,false); ?></div>

            

            <div class="small-2 cell"><i class="fa fa-check"></i></div>

        </div>

    </div>

<?php endif; ?>

</div>					

<?php if( get_field('page_banner_cta_text') ): ?>



<!-- CALLS TO ACTION -->

<div class="show-for-large">

<div class="large-12 cell" data-magellan>

<p><a class="cta_btn button" href="<?php the_field('page_banner_cta_link',false,false); ?>"><?php the_field('page_banner_cta_text',false,false); ?> <i class="fa fa-chevron-right"></i></a>

<?php if( get_field('page_banner_after_cta_text') ): ?>

<?php the_field('page_banner_after_cta_text',false,false); ?>

<?php endif; ?>

</p>

</div>

</div>

<!-- END CALLS TO ACTION -->

<?php endif; ?>

</div>

</div>

<!-- END DESKTOP BANNER -->

<div class="banner hide-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

<!-- MOBILE BANNER  -->

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

<p><a class="cta_btn button" href="<?php the_field('page_banner_cta_link',false,false); ?>"><?php the_field('page_banner_cta_text',false,false); ?> <i class="fa fa-chevron-right"></i></a> <?php the_field('page_banner_after_cta_text'); ?></p>

</div>

</div>

<!-- CALLS TO ACTION -->

<?php endif; ?>

</div>

</div>

<!-- END MOBILE BANNER -->





