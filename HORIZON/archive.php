<?php

$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'year'=> 1990,
		'monthnum'=> 10,
		'paged'=>$paged,
	)
);


?>











<?php get_header(); ?>



	<?php if(have_posts()):while(have_posts()):the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile;endif; ?>


	<?php
		while ($post_query->have_posts()) : $post_query->the_post();
	?>

	<?php endwhile; wp_reset_postdata(); ?>




<?php get_sidebar(); ?>
<?php get_footer(); ?>