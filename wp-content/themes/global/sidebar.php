<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

  <aside id="secondary" class="small-4 widget-area column" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside><!-- #secondary -->

</div><!-- .row -->
