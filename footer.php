<?php?>
  <footer class="site__footer">
      <div class="lace clear"><a href="" class="site__logo">Barcoding</a>
        <nav class="nav nav-social">
          <?php wp_nav_menu( array('menu' =>'social-links', 'theme_location' => 'social-links', 'container' => '', 'items_wrap'  => '<ul id="social-links" class="social-links" >%3$s</ul>'  ) ); ?>
          
        </nav>
      </div>
      <div class="sole clear">
        <div class="tread">
          <nav class="nav nav-secondary-main">
            <?php wp_nav_menu( array('menu' =>'secondary-menu', 'theme_location' => 'secondary-menu', 'container' => '', 'items_wrap'  => '<ul id="menu-secondary" class="menu 2" >%3$s</ul>'  ) ); ?>
          </nav>
        </div>
        <div class="tread">
          <nav class="nav nav-bulleted nav-action">
            <?php wp_nav_menu( array('menu' =>'secondary-footer-menu', 'theme_location' => 'secondary-footer-menu', 'container' => '', 'items_wrap'  => '<ul id="secondary-footer-menu" class="secondary-footer-menu" >%3$s</ul>'  ) ); ?>
          </nav>
          <nav class="nav nav-bulleted nav-legal">
            <?php wp_nav_menu( array('menu' =>'privacy-menu', 'theme_location' => 'privacy-menu', 'container' => '', 'items_wrap'  => '<ul id="privacy-menu" class="privacy-menu" >%3$s</ul>'  ) ); ?>
          </nav>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/build/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/build/site.js"></script>
</body>
</html>

