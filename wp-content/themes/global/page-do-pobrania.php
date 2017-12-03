<?php
/**
 *
 * Template name: Do pobrania
 *
 */

get_header(); ?>

<div class="small-12 column">
	<table class="row">
		<thead class="small-12 column">
			<tr class="row text-center">
				<th class="small-10 column">Plik</th>
			</tr>
		</thead>
		<tbody class="small-12 column">

			<?php if(have_rows('file_to_download')): ?>
				<tr class="row align-middle">
					<?php while(have_rows('file_to_download')): the_row(); ?>

						<td class="text-center column">
							<?php 
								$file = get_sub_field('download_file');
							?>
													
							<?php if( $file ): ?>
								<a href="<?php echo $file['url']; ?>" download="<?php echo basename($file['url']); ?>">Download file</a>
							<?php endif; ?>	
						</td>
					
					<?php endwhile; ?>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>

<?php get_footer(); ?>
