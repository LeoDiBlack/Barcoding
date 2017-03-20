<?php /* Template Name: business-areas */ ?>
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
                <div class="compartment"><?php the_title( '<h1 class="hero__title">', '</h1>' ); ?>
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
                <div class="flag">
                  <h3>You Might Also Like...</h3>
                </div>
                <div class="grid">
                  <div class="col-gamagori-4">
                    <div class="callout callout--orange"><a href="" class="callout__details">
                        <h3 class="mini">Whitepapers</h3>
                        <h2 class="stay">Asset, Patient Tracking Technology Jockeys for Bottom-line Position.</h2></a>
                        <div class="callout__share">
                          <h3 class="mini"><span>Share +</span></h3>
                          <nav class="nav nav-social">
                            <ul>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-pinterest">
                                        <use xlink:href="#pinterest"></use>
                                      </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-google">
                                        <use xlink:href="#google"></use>
                                      </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-linkedin">
                                        <use xlink:href="#linkedin"></use>
                                      </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                              <li><a href="" target="_blank"> <span class="bottle">
                                      <svg class="symbol symbol-twitter">
                                        <use xlink:href="#twitter"></use>
                                      </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-facebook">
                                        <use xlink:href="#facebook"></use>
                                      </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                  </div>
                  <div class="col-gamagori-4">
                    <div class="callout callout--gray"><a href="" class="callout__details">
                        <h3 class="mini">Events</h3>
                        <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                        <h2 class="stay">9.12.16</h2></a>
                        <div class="callout__share">
                          <h3 class="mini"><span>Share +</span></h3>
                          <nav class="nav nav-social">
                            <ul>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-pinterest">
                                        <use xlink:href="#pinterest"></use>
                                      </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-google">
                                        <use xlink:href="#google"></use>
                                      </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-linkedin">
                                        <use xlink:href="#linkedin"></use>
                                      </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                              <li><a href="" target="_blank"> <span class="bottle">
                                      <svg class="symbol symbol-twitter">
                                        <use xlink:href="#twitter"></use>
                                      </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-facebook">
                                        <use xlink:href="#facebook"></use>
                                      </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                  </div>
                  <div class="col-gamagori-4">
                    <div class="callout callout--blue"><a href="" class="callout__details">
                        <h3 class="mini">Events</h3>
                        <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                        <h2 class="stay">9.12.16</h2></a>
                        <div class="callout__share">
                          <h3 class="mini"><span>Share +</span></h3>
                          <nav class="nav nav-social">
                            <ul>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-pinterest">
                                        <use xlink:href="#pinterest"></use>
                                      </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-google">
                                        <use xlink:href="#google"></use>
                                      </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-linkedin">
                                        <use xlink:href="#linkedin"></use>
                                      </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                              <li><a href="" target="_blank"> <span class="bottle">
                                      <svg class="symbol symbol-twitter">
                                        <use xlink:href="#twitter"></use>
                                      </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                              <li><a href="" target="_blank"><span class="bottle">
                                      <svg class="symbol symbol-facebook">
                                        <use xlink:href="#facebook"></use>
                                      </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_footer();?>