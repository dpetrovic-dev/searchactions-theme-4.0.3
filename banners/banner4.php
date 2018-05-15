<!-- DESKTOP BANNER  -->

<div class="banner banner4 flex_center <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

    <div class="grid-container">

        <!-- BANNER HEADLINE -->

        <?php if( get_field('page_banner_layout_custom_content') ): ?>

         <?php the_field('page_banner_layout_custom_content'); ?>

        <?php endif; ?>

        <!-- END BANNER HEADLINE -->						

    </div>

</div>

<!-- END DESKTOP BANNER -->



<!-- MOBILE BANNER  -->

<!-- END MOBILE BANNER -->

