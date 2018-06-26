<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="motopress-wrapper content-holder clearfix">

    <?php if( have_rows('slider') ): ?>
      <div id="parallax-slider-5af3de9172cb7" class="parallax-slider">
        <ul class="baseList">
          <?php while( have_rows('slider') ): the_row();
            $slider_string_1 = get_sub_field('slider_string_1');
            $slider_string_2 = get_sub_field('slider_string_2');
            $slider_string_3 = get_sub_field('slider_string_3');
            $image = get_sub_field('image');
          ?>
          <li data-preview="<?php echo $image['url']; ?>" data-img-width="1600" data-img-height="691">
            <div class="slider_caption>">
              <strong><?php echo $slider_string_1; ?></strong>
              <em><?php echo $slider_string_2; ?></em>
              <em><?php echo $slider_string_3; ?></em>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>

      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div id="post-203" class="page type-page status-publish hentry page">
                  <!-- .row (end) -->
                  <?php if( have_rows('squads') ): ?>
                  <div class="content_box  ">
                    <div class="row ">

                      <div class="span12">
                        <section class="lazy-load-box trigger effect-fade content_box--inner" data-delay="600">
                          <?php while( have_rows('squads') ): the_row();
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
                  <div class="home-verticals spacer">

                    <div class="row">
                      <div class="span12">
                        <h3 class="home-verticals--title">Наши преимущества</h3>
                        <div class="home-verticals--descr">Каждая неделя состоит из двух дней работы по 4 часа в день (субота и воскресенье)</div>
                      </div><!-- /.span12 -->
                    </div><!-- /.row -->


                    <div class="row home-verticals--item home-verticals--item-1">
                      <div class="span6 home-verticals--left">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_1'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_1'); ?></h5>
                          <p><?php the_field('advantages_description_1'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                      <div class="span6 home-verticals--right">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_1'); echo $image['url']; ?>" alt="">
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-2">
                      <div class="span6 home-verticals--left">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_2'); echo $image['url']; ?>" alt="">
                      </div>
                      <div class="span6 home-verticals--right">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_2'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_2'); ?></h5>
                          <p><?php the_field('advantages_description_2'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-3">
                      <div class="span6 home-verticals--left">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_3'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_3'); ?></h5>
                          <p><?php the_field('advantages_description_3'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                      <div class="span6 home-verticals--right">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_3'); echo $image['url']; ?>" alt="">
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-4">
                      <div class="span6 home-verticals--left">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_4'); echo $image['url']; ?>" alt="">
                      </div>
                      <div class="span6 home-verticals--right">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_4'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_4'); ?></h5>
                          <p><?php the_field('advantages_description_4'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-5">
                      <div class="span6 home-verticals--left">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_5'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_5'); ?></h5>
                          <p><?php the_field('advantages_description_5'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                      <div class="span6 home-verticals--right">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_5'); echo $image['url']; ?>" alt="">
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-6">
                      <div class="span6 home-verticals--left">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_6'); echo $image['url']; ?>" alt="">
                      </div>
                      <div class="span6 home-verticals--right">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_6'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_6'); ?></h5>
                          <p><?php the_field('advantages_description_6'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                    </div>

                    <div class="row home-verticals--item home-verticals--item-7">
                      <div class="span6 home-verticals--left">
                        <div class="hv--content">
                          <h4><?php the_field('advantages_title_7'); ?></h4>
                          <h5><?php the_field('advantages_subtitle_7'); ?></h5>
                          <p><?php the_field('advantages_description_7'); ?></p>
                          <button class="order-discount">Записатся со скидкой</button>
                        </div>
                      </div>
                      <div class="span6 home-verticals--right">
                        <img class="hv--image" src="<?php $image = get_field('advantages_image_7'); echo $image['url']; ?>" alt="">
                      </div>
                    </div>

                  </div>
                  <!-- .spacer (end) -->
				     <?php /* ?>
                  <div class="row ">
                    <div class="span12 ">
                      <section class="lazy-load-box trigger effect-fade ">
                        <div class="banner-wrap ">
                          <figure class="featured-thumbnail"><a href="our-school" title="&lt;em&gt;We will help&lt;/em&gt; you understand the world!"><img src="<?php echo get_template_directory_uri(); ?>/img/banner_img.jpg" title="&lt;em&gt;We will help&lt;/em&gt; you understand the world!" alt=""></a></figure>
                          <h5><em>We will help</em> you understand the world!</h5>
                          <?php the_content(); ?>
                          <div class="clear"></div>
                        </div>
                        <!-- .banner-wrap (end) -->
                      </section>
                    </div>
                  </div>
                  <!-- .row (end) -->
				     <?php */ ?>
                  <div class="clear"></div>
                  <!--.pagination-->
                </div>
                <!--#post-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
