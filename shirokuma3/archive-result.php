<?php get_header(); ?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title">安心の対応実績</h1>
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
							<?php while(have_posts()): the_post();?>

								<?php get_template_part('loop', 'result'); ?>

							<?php endwhile;?>
						</div>
					<?php else : ?>
						<p class="mb-5">記事が見つかりませんでした</p>
					<?php endif;?>

					<?php get_template_part('part', 'cta'); ?>

				</div>
			</div>
		</div>
		<!-- .p-section -->



	</section>
</main>

<?php get_footer(); ?>