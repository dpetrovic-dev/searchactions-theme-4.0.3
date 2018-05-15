<div class="small-12 large-4 cell post-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
  <div class="post-wrapper" data-equalizer-watch>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large', array( 'itemprop' => 'image' ) );
	} else { ?>
        <img src="/wp-content/uploads/bg-default-featured-image-thumb.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
    </a>

    <div class="post-box">
      <div class="date">
        <p>
          <?php echo get_the_date();?>
        </p>
      </div>
      <div class="title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div>
    </div>
  </div>
  <div class="post-link">
    <a class="text-gradient" data-hover="Read Article" title="read article" href="<?php the_permalink(); ?>">Read Article <i class="fa fa-caret-right" aria-hidden="true"></i></a>
  </div>
</div>
</article>
</div>
