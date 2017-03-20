<?php /* Template Name: about */ ?>
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
                <div class="entry-content">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                  <?php endwhile; endif; ?>
                  <?php edit_post_link(); ?>
                  <?php wp_link_pages(); ?>
                </div><!-- .entry-content -->
              </div>
            </div>
            <div class="section">
              <div class="compartment">
                <div class="flex flex--justified flex--bordered">
                  <h2>Our Partners</h2><a href="" class="discover">View All</a>
                </div>
                <ul class="styled-list divided-list condensed-list">
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Advantech</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Elo TouchSystems</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>LXE</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>CaptureSoft</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Brother</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>ID Label</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Microscan</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>MobileFrame</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>CaptureTech</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Internec</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>O'Neil</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Savant Solutions</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Datalogic</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Janam</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>Zebra Printers</span></a></li>
                  <li><a href="">
                        <svg class="symbol symbol-arrow-right">
                          <use xlink:href="#arrow-right"></use>
                        </svg><span>SOTI Inc.</span></a></li>
                </ul>
              </div>
            </div>
            <div class="callout--extreme">
              <h1>Got what it takes? We're hiring.</h1><a href="" class="button">Browse Jobs</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_footer();?>