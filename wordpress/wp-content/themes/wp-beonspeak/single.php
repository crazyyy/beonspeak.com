<?php get_header(); ?>
    <div class="motopress-wrapper content-holder clearfix">
      <div class="container">
        <div class="row">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
              <div class="row">
                <div class="span8 right right" id="content">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- Post Content -->
                    <div class="post_content">
                      <?php the_content(); ?>
                      <div class="clear"></div>
                    </div>
                    <!-- //Post Content -->

                    <!-- Post Meta -->
                    <div class="post_meta meta_type_line">
                      <div class="post_meta_unite clearfix">
                        <div class="meta_group clearfix">
                          <div class="post_category">
                            <i class="icon-bookmark"></i>
                            <?php the_category(', '); ?> </div>
                          <div class="post_date">
                            <i class="icon-calendar"></i>
                            <?php the_time('d F Y'); ?> <?php the_time('H:i'); ?>
                          </div>
                        </div>
                        <div class="meta_group clearfix"></div>
                        <div class="meta_group clearfix"></div>
                      </div>
                    </div>
                    <!--// Post Meta -->
                  </article>

                </div>

                <?php get_sidebar(); ?>

              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
