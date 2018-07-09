<?php /* Template Name: Courses Page */ get_header(); ?>
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
                      <?php $posts = get_field('courses'); if( $posts ): ?>
                        <ul>
                          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                              <?php setup_postdata($post); ?>
                              <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                      <div class="clear"></div>
                    </div>
                    <!-- //Post Content -->

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


