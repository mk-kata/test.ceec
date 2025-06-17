<?php


$searchArr = array(
	'post_type' => 'faq',
	'nopaging' => -1,
	'post_status' => 'publish',
	'order'=>'ASC',
	'orderby'=>'date',
);

$currentTax = '';

$taxQueryArr = array();
if(is_null($term) == false) {
	$tax = get_term_by('slug', $term, 'faq_cat');
	$currentTax = $term;
	$taxQueryArr[] = array(
		array(
			'taxonomy' => 'faq_cat',
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


$cats = get_terms('faq_cat', array(
	'hide_empty' => false
));


get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Faq</span>
			<h1>よくある質問</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
  <div class="contents-inner">
		<a href="<?php get_url(); ?>">TOP</a>
		<span>/</span>
		<span>よくある質問</span>
  </div>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<nav class="local-link arrow-right">
				<ul>
					<li><a href="<?php get_url(); ?>/faq/">すべて</a></li>
					<?php
						foreach($cats as $c):
							if($c->parent > 0):
								continue;
							endif;
					?>
					<li<?php if($currentTax == $c->slug) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/faq/faq_cat/<?php echo $c->slug; ?>"><?php echo $c->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>

			<h2 class="parts-main-title">よくある質問<?php if(is_null($term) === false) echo '(' . $tax->name . ')'; ?></h2>
			
			<div class="faq-list">
				<?php
					while ($post_query->have_posts()) : $post_query->the_post();
				?>

				<div class="item">
					<div class="question"><?php echo get_field("sub_text") . get_the_title(); ?></div>
					<div class="answer">
						<div class="inner">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>


		</div>
	</div>
	<!-- /.contents-box c-box01 -->

</div>
<!-- /#contents -->


<?php get_footer(); ?>