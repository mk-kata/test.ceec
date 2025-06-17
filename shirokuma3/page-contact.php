<?php
/**
 * Template Name: お問い合わせフォーム
 */
get_header();
the_post();
?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title"><?php the_title(); ?></h1>
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
					<div class="p-contact-header">
						<h2 class="c-heading c-heading--1">まずはお気軽に<br>お問い合わせください</h2>

						<p class="text-center">各種お見積り、わからない点や困っていることがありましたら<br class="d-none d-lg-block">お気軽にお問い合わせください。</p>
					</div>

					<?php get_template_part('part', 'cta'); ?>

					<ul class="p-step-bar">
						<li<?php if (is_page("contact")):?> class="is-active"<?php endif; ?>>お客様情報<br class="d-block d-lg-none">入力</li>
						<li<?php if (is_page("confirm")):?> class="is-active"<?php endif; ?>>入力情報<br class="d-block d-lg-none">確認</li>
						<li<?php if (is_page("thanks")):?> class="is-active"<?php endif; ?>>お問い合わせ<br class="d-block d-lg-none">完了</li>
					</ul>

					<?php remove_filter('the_content', 'wpautop'); ?>
					<?php the_content(); ?>

				</div>
				<!-- .l-inner -->
			</div>
			<!-- .container -->
		</div>
		<!-- .p-section -->



	</section>
</main>

<?php get_footer(); ?>