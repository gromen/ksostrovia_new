<?php
/**
 *
 * Template name: Drużyny
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'zawodnicy' );

					// If comments are open or we have at least one comment, load up the comment template.

				endwhile; // End of the loop.
			?><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
