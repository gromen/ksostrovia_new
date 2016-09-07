<?php
/**
 *
 * Template name: Kontakt
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="small-12 column">

			<?php
				while ( have_posts() ) : the_post();?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<div class="row">
						 <div class="small-12 medium-10 large-4 column">
								<div class="entry-content">
									<?php
										the_content();
									?>
								</div><!-- .entry-content -->
						 </div>
							<div class="small-12 large-4 column"><?php the_field('contact_info'); ?></div>
						</div>


						<?php if ( get_edit_post_link() ) : ?>
							<footer class="entry-footer">
								<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'global' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
								?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-## -->

				<?php endwhile; ?><!-- // End of the loop. -->
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
