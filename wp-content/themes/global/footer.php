<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global
 */

?>




      <footer class="site-footer">
        <div class="row">
          <div class="small-12 column">

            <?php wp_nav_menu( array(
                'theme_location' => 'secondary',
                'menu_class' => 'footer-menu',
                'container' => 'nav'
              ) ); ?>

          </div>
        </div>
      </footer><!-- footer -->
      <?php wp_footer(); ?>
</body>
</html>
