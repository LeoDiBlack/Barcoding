<?php?>
<div class="col-large-4 col-wooser-3 nav-tier-bubble">
          <nav class="nav nav-tier">
            <ul>
              <li class="nav-tier-custom-li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <svg class="symbol symbol-arrow-left">
                      <use xlink:href="#arrow-left"></use>
                    </svg><span>Back to Parent Page</span></a>
                    <?php global $post;
                      if ( $post->post_parent ) { ?>
                        <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
                        <?php echo get_the_title( $post->post_parent ); ?>
                        </a>
                    <?php } ?>
              </li>
            </ul>
            <?php wp_nav_menu( array('menu' =>'an-extra-menu', 'theme_location' => 'an-extra-menu', 'container' => '', 'items_wrap'  => '<ul id="an-extra-menu" class="an-extra-menu" ><li></li>%3$s</ul>' ) ); ?>
          </nav>
        </div>

