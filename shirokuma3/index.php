<?php get_header();
the_post(); ?>

<main  class="p-main">
	<div class="container">
		<?php the_content(); ?>
	</div>
</main>

<?php get_footer(); ?>