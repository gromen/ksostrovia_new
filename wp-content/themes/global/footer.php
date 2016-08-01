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

            </div>   <!-- news post column -->

            <!-- Sidebar -->
            <div class="small-12 medium-5 column">

              <?php get_sidebar('league_table'); ?>
              <?php get_sidebar('upcoming_matches'); ?>

            </div><!-- Sidebar -->


        </div><!-- .row -->
      </main><!-- #content -->

      <footer class="site-footer" role="contentinfo">
        <?php wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id' => 'footer-menu'
        ) ); ?>
      </footer><!-- footer -->
      <?php wp_footer(); ?>
</body>
</html>
