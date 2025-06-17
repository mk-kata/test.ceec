<?php
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

					<?php the_content(); ?>

				</div>
			</div>
		</div>
		<!-- .p-section -->

	</section>
</main>

<?php get_footer(); ?>