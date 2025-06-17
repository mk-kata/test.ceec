<?php


$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$post_query = new WP_Query(
	array(
		'post_type' => 'voice',
		'posts_per_page' => 5,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'paged'=>$paged,
	)
);



get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>User's Voice</span>
			<h1>お客様の声</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>お客様の声</span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">
			
			<div class="list">
				
				<?php
					while ($post_query->have_posts()) : $post_query->the_post();
						$img = get_post_thumbnail_id();
						$img = wp_get_attachment_image_src($img, 'voiceThumb', true);
				?>

				<div class="item parts-float-box">
					<div>
						<img src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title(); ?>" align="left">
						<h2 class="item-title"><?php echo get_the_title(); ?></h2>
						<div class="information"><?php the_field('user'); ?></div>
					</div>
					<?php the_content(); ?>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>


			<?php wp_pagenavi(array('query'=>$post_query)); ?>


		</div>
	</div>
	<!-- /.contents-box c-box01 -->


</div>
<!-- /#contents -->



<?php get_footer(); ?>