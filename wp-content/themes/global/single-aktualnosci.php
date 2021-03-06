<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package global
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="small-12 column">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>

						      <figure class="entry-image__item"> <?php the_post_thumbnail('img700x250'); ?></figure>

						    <?php else :?>

					        <figure class="entry-image__item"> <?php the_post_thumbnail('img250x250'); ?></figure>

					    <?php endif; ?>
						</div>

						<header class="entry-header">
							<?php
								if ( is_single() ) {
									the_title( '<h1 class="h2 entry-title text-green">', '</h1>' );
								} else {
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								}

							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php global_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
						</header><!-- .entry-header -->

						<div class="news-post__published-date"><?php the_date(); ?></div>

						<div class="entry-content">
							<?php
								the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'global' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'global' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php global_entry_footer(); ?>

						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

				</div>

			</div><!-- small-12 column -->

		<?php endwhile; ?> <!-- // End of the loop. -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
