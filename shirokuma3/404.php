<?php
get_header();
the_post();
?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title">404 Error</h1>
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

					<p>ご指定のURLが間違っているか、ページが削除された可能性があります。<br>ブラウザの「戻る」ボタンで前のページにお戻りいただくか、<br><a href="/">トップページ</a>より目的のページをお探しください。</p>

					<a href="" class="p-button p-button--blue p-button--arrow mx-auto mt-5">トップページ</a>

				</div>
			</div>
		</div>
		<!-- .p-section -->



	</section>
</main>

<?php get_footer(); ?>