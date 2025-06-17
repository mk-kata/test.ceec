<?php
/*
Template Name: WooCommerce Page
*/
get_header();
the_post();
?>

<main  class="p-main">
	<div class="container">
		<div class="c-card py-5">
			<?php the_content(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>