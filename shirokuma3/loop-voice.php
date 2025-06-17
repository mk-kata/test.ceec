<div class="col-lg-6">
	<div class="c-card">
		<picture class="c-card__image">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('eyecatch-720_369'); ?>
			<?php else : ?>
				<img src="<?php _e_asset_url('img/no-image.png'); ?>" alt="no image" width="266" height="170">
			<?php endif; ?>
		</picture>
		<h3 class="c-card__title"><?php the_title(); ?></h3>
		<p class="c-card__text"><?php trim_str_by_chars(get_the_content(),100); ?></p>
	</div>
</div>