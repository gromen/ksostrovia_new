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
				<th class="small-2 text-center column">Typ</th>
				<th class="small-10 column">Plik</th>
			</tr>
		</thead>
		<tbody class="small-12 column">
			<tr class="row align-middle">
				<td class="small-2 text-center column">
					<span class="icon-file-<?php echo strtolower( pathinfo( get_field('file_1_file'), PATHINFO_EXTENSION ) )?> icon-2x" aria-hidden="true"></span>
				</td>
				<td class="small-10 column">
					<a href="<?php the_field('file_1_file'); ?>" download="<?php echo basename(get_field('file_1_file') ); ?>"><?php the_field('file_1_name'); ?></a>
				</td>
			</tr>
			<tr><a href=""></a></tr>
		</tbody>
	</table>
</div>

<?php get_footer(); ?>
