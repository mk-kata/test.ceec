<li class="p-news">
	<a href="<?php the_permalink(); ?>">
		<div class="p-news__header">
			<time class="p-date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
		</div>
		<p class="p-news__text"><?php the_title(); ?></p>
	</a>
</li>