<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="post_wrapper">
    <article id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
      <header class="post-header">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <figure class="featured-thumbnail thumbnail large">
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) { ?>
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } else { ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } ?>
        </a><!-- /post thumbnail -->
      </figure>
      <!-- Post Content -->
      <div class="post_content">
        <div class="excerpt">
          <?php wpeExcerpt('wpeExcerpt40'); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
        <div class="clear"></div>
      </div>
    </article>
  </div>
<?php endwhile; endif; ?>
