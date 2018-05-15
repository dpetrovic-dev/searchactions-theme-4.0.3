<!--  DESKTOP BANNER -->

<div class="banner banner3 show-for-large <?php if (get_field('page_banner_add_padding')) { ?>bannerpadding<?php } ?> <?php if( get_field('page_banner_add_class') ){ ?><?php get_sub_field('page_banner_add_class',false,false) ?><?php } ?>">

<div class="grid-container">

<div class="large-8 cell">

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

<div class="large-4 cell">

<?php if( get_field('page_banner_form') ): ?>
<div class="banner3_form">
<?php

echo FrmFormsController::get_form_shortcode(

	array(

		'id' => get_field("page_banner_form")

	)

);

?>
</div>
<?php endif; ?>

</div>

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

<?php if( get_field('page_banner_form_mobile_popup') ): ?>

<div class="small-12 cell reveal" id="form_popup" data-reveal>	

<?php

echo FrmFormsController::get_form_shortcode(

	array(

		'id' => get_field("page_banner_form")

	)

);

?>

<button class="close-button" data-close aria-label="Close modal" type="button">

    <span aria-hidden="true">&times;</span>

  </button>

</div>

<a class="cta_btn button" data-open="form_popup"><?php the_field('page_banner_form_mobile_popup',false,false); ?></a>

<?php endif; ?>

</div>

</div>

<!-- END MOBILE BANNER -->



