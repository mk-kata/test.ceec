<?php get_header();
the_post(); ?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<div class="p-page-header__title">
				<?php if(is_singular('news')): ?>
					お知らせ
				<?php elseif (is_singular('industry_news')): ?>
					業界ニュース
				<?php elseif (is_singular('column')): ?>
					コラム
				<?php endif; ?>
			</div>
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
				<div class="l-inner p-single-content">

					<?php if ($terms = get_the_terms($post->ID, 'industry_news_cat')): ?>
						<ul class="c-label-list">
							<?php foreach ( $terms as $term ): ?>
								<li class="c-label c-label--<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<h1 class="p-single-content__title"><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<div class="p-pagenation p-pagenation--single mb-5">

						<div><?php previous_post_link('%link','前<span>の記事</span>'); ?></div>

						<div><a class="p-button p-button--pink p-button--arrow" href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $cp_slug = get_query_var('post_type'); ?>/"><span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>一覧</a></div>

						<div><?php next_post_link('%link','次<span>の記事</span>'); ?></div>

					</div>


					<?php get_template_part('part', 'cta'); ?>

				</div>
			</div>
		</div>
		<!-- .p-section -->
	</section>
</main>

<?php get_footer(); ?>