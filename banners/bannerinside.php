<!-- DESKTOP BANNER  -->

<div class="banner flex_center bannerinside show-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php the_field('page_banner_add_class') ?><?php } ?>">

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

        <?php if ( get_field( 'page_disable_breadcrumbs' ) ){ ?>
		<?php } else { ?>
        <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>
        <?php } ?>


        </div>						

    </div>

</div>

<!-- END DESKTOP BANNER -->



<!-- MOBILE BANNER  -->

<div class="banner bannerinside flex_center hide-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

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

          <?php if ( get_field( 'page_disable_breadcrumbs' ) ){ ?>
		<?php } else { ?>
        <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>
        <?php } ?>

        </div>

    </div>

</div>

<!-- END MOBILE BANNER -->

