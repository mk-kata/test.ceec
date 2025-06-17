<?php get_header(); ?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title">お客様の声</h1>
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

					<?php if(have_posts()):?>
						<div class="c-card-list mb-5">
							<div class="row g-4">
								<?php while(have_posts()): the_post();?>

									<?php get_template_part('loop', 'voice'); ?>

								<?php endwhile;?>
							</div>
						</div>
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