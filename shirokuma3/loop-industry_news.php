<li class="p-news">
	<a href="<?php the_permalink(); ?>">
		<div class="p-news__header">
			<time class="p-date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
			<?php if ($terms = get_the_terms($post->ID, 'industry_news_cat')): ?>
				<ul class="c-label-list">
					<?php foreach ( $terms as $term ): ?>
						<li class="c-label c-label--<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<p class="p-news__text"><?php the_title(); ?></p>
	</a>
</li>