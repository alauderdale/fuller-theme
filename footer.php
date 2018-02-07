<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>



  <footer class='global-footer'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-6'>
          <div class='media'>
            <div class='media-left'>
              <img class='media-object quarter-margin-right' src='<?php bloginfo('template_url'); ?>/images/footer-logo.png' width='35px'>
            </div>
            <div class='media-body'>
              <div class='media-heading'>
                <h5 class='half-margin-top'>
                  <?php the_field('footer_copyright_text', 'option'); ?>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class='col-sm-6'>
          <?php wp_nav_menu( array( 
                'theme_location' => 'menu-social', 
                'container' => false, 
                'menu_class' => 'social-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
          )); ?>
          <?php wp_nav_menu( array( 
            'theme_location' => 'menu-social-two', 
            'container' => false, 
            'menu_class' => 'social-list-two',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
          )); ?>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-10 margin-top'>
          <div class="footer-disclaimer">
            <p class='medium-font-name'>
              <?php the_field('disclaimer_title', 'option'); ?>
            </p>
            <?php the_field('disclaimer', 'option'); ?>
          </div>
        </div>
        <div class='col-md-2'></div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2uqyFCdcw3XYbob-_s5nZM5y2X7bPvfI&libraries=places&callback=activatePlacesSearch"></script>

</body>
</head>
</html>