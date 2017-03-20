<?php /* Template Name: kitchen-sink */ ?>
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
              <div class="hero hero--mask hero--default">
                <div class="compartment">
                  <?php the_title( '<h1 class="hero__title">', '</h1>' ); ?>
                </div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/interior.jpg" alt="undefined">
              </div>
            <div class="section">
              <div class="compartment">
                <div class="section">
                <div class="compartment">
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
            <div class="callout--extreme">
              <h1>Cta Call out can go here lorem ipsum dolor</h1><a href="" class="button">Action</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_footer();?>