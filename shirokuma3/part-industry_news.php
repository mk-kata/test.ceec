<h2 class="c-heading c-heading--1">業界ニュース</h2>

<div class="p-tab-panel">
	<div class="p-category-nav-wrap p-tab-panel__tab">
		<ul class="p-category-nav">
			<li class="js-tab"><a href="javascript:void(0);">すべて</a></li>
			<?php
			$page_slug = get_post($wp_query->post->ID)->post_name;
			$taxonomy = 'industry_news_cat';
			$args = array(
				'hide_empty' => false,
				'parent' => 0
			);
			$terms = get_terms($taxonomy, $args);
			foreach ($terms as $term):
				$term_slug = $term->slug;
				?>
				<li class="js-tab<?php if($page_slug === $term_slug ) { echo ' is-active';};?>"><a href="javascript:void(0);"><?php echo $term->name; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="p-tab-panel__item js-panel">
		<?php
		$args = array(
			'post_type' => 'industry_news',
			'numberposts' => 5,
		);
		$my_posts = get_posts( $args );
		if ( $my_posts ) {
			echo '<ul class="p-news-list">';
			foreach ( $my_posts as $post ) :
				setup_postdata( $post );
				?>

					<?php get_template_part('loop', 'industry_news'); ?>

				<?php
			endforeach;
			echo '</ul>';
		} else {
			echo '<p>記事が見つかりませんでした</p>';
		}
		wp_reset_postdata();
		?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>industry_news/" class="p-button p-button--blue p-button--arrow mx-auto mt-5">業界ニュース</a>
	</div>

	<?php
	$taxonomy = 'industry_news_cat';
	$args = array(
		'hide_empty' => false,
		'parent' => 0
	);
	$terms = get_terms($taxonomy, $args);
	foreach ($terms as $term):
		$term_slug = $term->slug;
		?>

		<div class="p-tab-panel__item js-panel<?php if($page_slug === $term_slug ) { echo ' is-active';};?>">
			<?php
			$args = array(
				'post_type' => 'industry_news',
				'industry_news_cat' => $term->slug,
				'numberposts' => 5,
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) {
				echo '<ul class="p-news-list">';
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>

						<?php get_template_part('loop', 'industry_news'); ?>

					<?php
				endforeach;
				echo '</ul>';
			} else {
				echo '<p>記事が見つかりませんでした</p>';
			}
			wp_reset_postdata();
			?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>industry_news/industry_news_cat/<?php echo $term->slug; ?>" class="p-button p-button--blue p-button--arrow mx-auto mt-5">業界ニュース</a>

		</div>

	<?php endforeach; ?>

</div>