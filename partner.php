<?php /* Template Name: partner */ ?>
    <?php
      if (function_exists('get_header')) {
        get_header();
      } else {
        header("Location: http://localhost:8040/wp/wordpress");
       exit;
      }
    ?>
    <main class="clear">
      <div class="grid">
        <?php get_sidebar('left'); ?>
        <div class="col-large-8 col-wooser-9">
          <div class="main-content">
            <div class="section">
              <div class="compartment">
                <div class="flex flex--justified flex--start">
                  <?php the_title( '<h1>', '</h1>' ); ?><a href="" class="button button--mini"><span>Share</span>
                      <svg class="symbol symbol-leave">
                        <use xlink:href="#leave"></use>
                      </svg></a>
                </div>
                <div class="entry-content">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                  <?php endwhile; endif; ?>
                  <?php edit_post_link(); ?>
                  <?php wp_link_pages(); ?>
                </div><!-- .entry-content -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_footer();?>