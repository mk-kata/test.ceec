<?php

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

if(isset($_GET["c"]) && $_GET["c"] !== "") {
	$c = htmlspecialchars($_GET["c"]);
	$blog_query = new WP_Query(
		array(
			'post_type' => 'column',
			'posts_per_page' => 12,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'date',
			'paged'=>$paged,
			'tax_query' => array(
				array(
					'taxonomy' => 'column_cat',
					'terms' => $c,
					'field'=>'slug',
					'operator' => 'IN',
				),
			),
		)
	);
}
 else {
 	$blog_query = new WP_Query(
		array(
			'post_type' => 'column',
			'posts_per_page' => 12,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'date',
			'paged'=>$paged,
		)
	);
 }


$blog_cat = get_terms("column_cat", array("hidden_empty" => false));

get_header(); ?>



<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Column</span>
			<h1>コラム</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
  <div class="contents-inner">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>コラム</span>
  </div>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<nav class="local-link arrow-right">
				<ul>
					<li><a href="<?php get_url(); ?>/column/">全記事</a></li>
					<?php foreach($blog_cat as $b): ?>
					<li<?php if($b->slug == $c) { $cat_name = $b->name; echo ' class="current"'; } ?>><a href="<?php get_url(); ?>/column?c=<?php echo $b->slug; ?>"><?php echo $b->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>

			<h2 class="parts-main-title">コラム一覧<?php if(is_null($cat_name) === false) echo '(' . $cat_name . ')'; ?></h2>

			<div class="list">
				
				<?php
					while ($blog_query->have_posts()) : $blog_query->the_post();
						$title = get_the_title();
						if(mb_strlen($title) > 13) $title = mb_substr($title, 0, 13) . '...';
						$cs = get_the_terms($post->ID, 'column_cat');

						$img = get_post_thumbnail_id();
						$img = wp_get_attachment_image_src($img, 'columnThumb', true);
				?>

				<div class="item">
					<a href="<?php the_permalink(); ?>" class="button waves-effect"></a>
					<div class="thumbnail"><img src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title(); ?>"></div>
					<div class="content">
						<div class="date"><?php echo get_post_time('Y/m/d(D)'); ?></div>
						<div class="item-title"><?php echo $title; ?></div>
						<p><?php the_excerpt(); ?></p>
						<div class="category">
							<?php foreach($cs as $c): ?>
							<span><?php echo $c->name; ?></span>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>

			<?php wp_pagenavi(array('query'=>$blog_query)); ?>
			
		</div>
	</div>
	<!-- /.contents-box c-box01 -->

</div>
<!-- /#contents -->



<?php get_footer(); ?>