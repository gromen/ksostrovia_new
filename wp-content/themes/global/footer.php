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




      <footer class="site-footer" role="contentinfo">
        <?php wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id' => 'footer-menu'
        ) ); ?>
      </footer><!-- footer -->
      <?php wp_footer(); ?>
</body>
</html>
