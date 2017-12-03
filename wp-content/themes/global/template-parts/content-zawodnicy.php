<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package global
 */

?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<div class="row">
			<div class="column"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
		</div>
	</header><!-- .entry-header -->

	<div class="row small-up-1 medium-up-3 large-up-6" data-equalizer data-equalize-by-row="true">

		<?php if( have_rows('player_add') ): ?>
			<?php while( have_rows('player_add') ): the_row(); 

				// vars
				$image = get_sub_field('player_photo');
				$name = get_sub_field('player_name');
				$position = get_sub_field('player_position');

				?>

			<div class="column" data-equalizer-watch>
				<figure class="players text-center">
					<?php if($image): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<?php endif; ?>

					<figcaption class="players__desc text-center">
						<?php if( $name ): ?>
							<span><?php echo $name . '<br>'; ?></span>
						<?php endif; ?>
						<?php if( $position ): ?>
							<span><?php echo $position; ?></span>
						<?php endif; ?>
					</figcaption>
				</figure>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'global' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

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
