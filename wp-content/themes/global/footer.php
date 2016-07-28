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

    	</div><!-- #content -->

    	<footer id="colophon" class="small-12 site-footer column" role="contentinfo">
    		<div class="site-info">
    			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'global' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'global' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'global' ), 'global', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
    		</div><!-- .site-info -->
    	</footer><!-- #colophon -->
<?php wp_footer(); ?>
    </div>
</body>
</html>
