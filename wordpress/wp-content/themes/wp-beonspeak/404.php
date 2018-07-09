<?php get_header(); ?>
  <div class="motopress-wrapper content-holder clearfix">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="row">
            <div class="span12">
              <section class="title-section">
                <h1 class="title-header"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </section>
              <!-- .title-section -->
            </div>
          </div>
          <div class="row">

              <div class="span12">
                <div id="post-203" class="page type-page status-publish hentry page">
                  <!-- .row (end) -->
                  <?php if( have_rows('squads', 1564) ): ?>
                  <div class="content_box  ">
                    <div class="row ">

                      <div class="span12">
                        <section class="lazy-load-box trigger effect-fade content_box--inner" data-delay="600">
                          <?php while( have_rows('squads', 1564) ): the_row();
                            // vars
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                            $descr = get_sub_field('descr');

                            ?>
                          <div class="service-box ">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                              <div class="flipper">
                                <div class="front">
                                  <h2 class="title"><a href="<?php echo $link; ?>" title="" target="_self"><?php echo $title; ?></a></h2>
                                </div>
                                <div class="back">
                                  <div class="service-box_body">
                                    <div class="service-box_txt">
                                      <?php echo $descr; ?>
                                      <button class="call-me">Заказать звонок</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /Service Box -->
                          <?php endwhile; ?>
                        </section>
                      </div>
                    </div>
                    <!-- .row (end) -->
                    <div class="clear"></div>
                  </div><!-- .content_box (end) -->
                <?php endif; ?>
              </div>
            </div>

            <?php /* ?>

            <div class="span12 right right" id="content">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Post Content -->
                <div class="post_content">
                  <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
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

            <?php */ ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
