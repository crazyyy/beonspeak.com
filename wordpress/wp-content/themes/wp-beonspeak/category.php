<?php get_header(); ?>

  <div class="motopress-wrapper content-holder clearfix">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="row">
            <div class="span12">
              <section class="title-section">
                <h1 class="title-header"><?php the_category(', '); ?></h1>
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </section>
              <!-- .title-section -->
            </div>
          </div>
          <div class="row">
            <div class="span8 right" id="content">
             <?php get_template_part('loop'); ?>
              <?php get_template_part('pagination'); ?>
            </div>
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
