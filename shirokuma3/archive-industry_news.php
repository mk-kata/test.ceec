<?php get_header(); ?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title">業界ニュース</h1>
		</div>
	</div>

	<section class="p-page-content">
		<span class="p-page-content__illust"></span>

		<div class="p-breadcrumb container px-4">
			<div class="l-inner">
				<?php get_template_part('part', 'breadcrumb'); ?>
			</div>
		</div>

		<div class="p-section p-section--ocean-bg">
			<div class="container px-4">
				<div class="l-inner">

					<div class="p-category-nav-wrap">
						<ul class="p-category-nav">
							<li class="is-active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>industry_news/">すべて</a></li>
							<?php
							$taxonomy = 'industry_news_cat';
							$args = array(
								'hide_empty' => false,
								'parent' => 0
							);
							$terms = get_terms($taxonomy, $args);
							$current_term_id = get_queried_object_id(); // 現在のカテゴリーIDを取得

							foreach ($terms as $term):
								$term_link = get_term_link($term, $taxonomy);
								$is_active = ($current_term_id == $term->term_id) ? 'is-active' : '';
								?>
								<li class="<?php echo $is_active; ?>">
									<a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>

					<?php if(have_posts()):?>
						<ul class="p-news-list mb-5">
							<?php while(have_posts()): the_post();?>

								<?php get_template_part('loop', 'industry_news'); ?>

							<?php endwhile;?>
						</ul>
					<?php else : ?>
						<p class="mb-5">記事が見つかりませんでした</p>
					<?php endif;?>

					<div class="p-pagenation my-5">
						<?php the_posts_pagination(
							array(
								// 'prev_next' => false,
								'prev_text' => '<span class="c-sq-btn"></span>',
								'next_text' => '<span class="c-sq-btn"></span>',
								'type'      => 'list',
							)
						); ?>
					</div>

					<?php get_template_part('part', 'cta'); ?>

				</div>
			</div>
		</div>
		<!-- .p-section -->
	</section>
</main>

<?php get_footer(); ?>