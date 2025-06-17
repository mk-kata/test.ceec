<div class="c-card">

	<h3 class="c-card__title"><?php the_title(); ?></h3>

	<?php if(!empty($post->post_content)):?>

		<div class="c-card__text"><?php the_content(); ?></div>

	<?php else : ?>

		<div class="c-card__text">

			<div class="p-result-article">
				<?php if(get_field('種別')):?>
				<dl>
					<dt>【種別】</dt>
					<dd><?php the_field('種別'); ?></dd>
				</dl>
				<?php endif;?>

				<?php if(get_field('用途')):?>
				<dl>
					<dt>【用途】</dt>
					<dd><?php the_field('用途'); ?></dd>
				</dl>
				<?php endif;?>
			</div>

			<div class="p-result-article">
				<?php if(get_field('構造')):?>
				<dl>
					<dt>【構造】</dt>
					<dd><?php the_field('構造'); ?></dd>
				</dl>
				<?php endif;?>

				<?php if(get_field('規模')):?>
				<dl>
					<dt>【規模】</dt>
					<dd><?php the_field('規模'); ?></dd>
				</dl>
				<?php endif;?>

				<?php if(get_field('建設地')):?>
				<dl>
					<dt>【建設地】</dt>
					<dd><?php the_field('建設地'); ?></dd>
				</dl>
				<?php endif;?>
			</div>

		</div>

	<?php endif;?>
</div>