<?php /* Template Name: Courses Page */ get_header(); ?>

  <div class="motopress-wrapper content-holder clearfix">
    <div class="container">
      <div class="row">

        <div class="span12">
          <div class="row">
            <div class="span12">
              <section class="title-section">
                <h1 class="title-header"><?php the_title(); ?></h1>
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </section>
              <!-- .title-section -->
            </div>
          </div>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div id="content" class="row">
              <div class="span12">
                <?php $posts = get_field('courses'); if( $posts ): ?>
                  <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-3cols isotope" data-cols="3cols">
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                            <li class="portfolio_item  term_id_20 term_id_22  term_id_17 isotope-item">
                              <div class="portfolio_item_holder">
                                <figure class="thumbnail thumbnail__portfolio">
                                  <a href="<?php the_permalink(); ?>" class="image-wrap" title="Image Format">
                                    <?php if ( has_post_thumbnail()) { ?>
                                      <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                    <?php } else { ?>
                                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                    <span class="zoom-icon"></span>
                                  </a>
                                </figure>
                                <!--/.thumbnail__portfolio-->
                                <div class="caption caption__portfolio">
                                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <!--/.caption__portfolio-->
                              </div>
                              <!--/.portfolio_item_holder-->
                            </li><!--/.portfolio_item-->

                    <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
