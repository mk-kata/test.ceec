<?php


$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$post_query = new WP_Query(
	array(
		'post_type' => 'news',
		'posts_per_page' => 10,
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
			<span>NEWS &amp; BLOG</span>
			<h1>お知らせ</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>お知らせ一覧</span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">
			
			<h2 class="parts-main-title">お知らせ一覧</h2>


			<div class="list">
				
				<?php
					while ($post_query->have_posts()) : $post_query->the_post();
				?>

				<div class="item">
					<div class="date"><?php echo get_post_time('Y.m.d (D)'); ?></div>
					<div class="title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
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