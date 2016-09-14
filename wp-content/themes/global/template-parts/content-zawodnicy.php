<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package global
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="row">
			<div class="column"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
		</div>
	</header><!-- .entry-header -->

	<div class="row small-up-1 medium-up-3 large-up-6" data-equalizer data-equalize-by-row="true">

		<?php
			$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

			foreach ( (array) $entries as $key => $entry ) :

			    $img = $title = $position = '';

			    if ( isset( $entry['title'] ) ) {
			        $title = esc_html( $entry['title'] );
			    }

			    if ( isset( $entry['wiki_test_textsmall'] ) ) {
			        $position = $entry['wiki_test_textsmall'];
			    }


			    if ( isset( $entry['image_id'] ) ) {
			        $img = wp_get_attachment_image( $entry['image_id'], 'thumbnail', null, array(
			        		            'class' => 'thumb',
			        		        ) );
			    }
		?>
		<div class="column">
			<figure class="players text-center">
				<?php echo $img; ?>
		    <figcaption class="players__desc text-center">
			    <?php echo $title . '<br>'; ?>
		    	<?php echo $position; ?>
		    </figcaption>
	    </figure>

		</div>

		<?php endforeach; ?>


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
