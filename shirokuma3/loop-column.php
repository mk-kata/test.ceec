<div class="col-lg-6">
	<a href="<?php the_permalink(); ?>" class="c-card">
		<?php if ($terms = get_the_terms($post->ID, 'column_cat')): ?>
			<ul class="c-label-list">
				<?php foreach ( $terms as $term ): ?>
					<li class="c-label c-label--<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<picture class="c-card__image">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('eyecatch-720_369'); ?>
			<?php else : ?>
				<img src="<?php _e_asset_url('img/no-image.png'); ?>" alt="no image" width="266" height="170">
			<?php endif; ?>
		</picture>
		<h3 class="c-card__title"><?php the_title(); ?></h3>
		<p class="c-card__text"><?php trim_str_by_chars(get_the_content(),100); ?></p>
	</a>
</div>