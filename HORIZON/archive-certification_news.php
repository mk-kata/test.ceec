<?php

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$searchArr = array(
		'post_type' => 'certification_news',
		'posts_per_page' => 30,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'paged'=>$paged,
);

$currentTax = '';

$taxQueryArr = array();
if(is_null($term) == false) {
	$tax = get_term_by('slug', $term, 'certification_news_cat');
	$currentTax = $term;
	$taxQueryArr[] = array(
		array(
			'taxonomy' => 'certification_news_cat',
			'terms' => $tax->slug,
			'field' => 'slug',
			'operator' => 'IN',
		),
	);
}

if(empty($taxQueryArr) === false) {
	$searchArr += array(
		'tax_query' => $taxQueryArr,
	);
}

$post_query = new WP_Query($searchArr);



$cats = get_terms('certification_news_cat', array(
	'hide_empty' => false
));



get_header(); ?>



<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>CERTIFICATION NEWS</span>
			<h1>環境性能認証不動産ニュース</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<div class="contents-inner">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>環境性能認証不動産ニュース</span>
	</div>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<nav class="local-link arrow-right">
				<ul>
					<?php foreach($cats as $c): ?>
					<li<?php if($currentTax == $c->slug) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/certification_news/certification_news_cat/<?php echo $c->slug; ?>"><?php echo $c->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>

			<div class="box round-title mt50">
				<div class="box-title">CHECK !</div>
					<div class="inner-box">
						<div class="content">
							<div class="inner-box-title">環境性能認証不動産一覧も掲載しています！</div>
								<p>過去のBELS・CASBEE不動産・CASBEEウィルネスオフィス・DBJ Green Building認証の認証不動産をまとめて掲載しています。ぜひご覧ください。</p>
								<div class="btn blue mt50"><a href="<?php get_url(); ?>/certification_list" class="button waves-effect"><span>認証不動産一覧を見る</span></a></div>
					</div>
					<div class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/check-img01.png" alt="環境性能認証不動産一覧も掲載しています！" /></div>
				</div>
			</div>
			
			<h2 class="parts-main-title mt50">環境性能認証不動産ニュース<?php if(is_null($term) === false) echo '(' . $tax->name . ')'; ?></h2>

			<div class="list">
				
				<?php
					while ($post_query->have_posts()) : $post_query->the_post();
						$cs = get_the_terms($post->ID, 'certification_news_cat');
				?>

				<div class="item">
					<div class="date"><?php echo get_post_time('Y.m.d (D)'); ?></div>
					<div class="content">
						<div class="category">
								<?php foreach($cs as $c): ?>
								<span><?php echo $c->name; ?></span>
								<?php endforeach; ?>
						</div>
						<div class="title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
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