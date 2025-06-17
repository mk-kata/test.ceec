<?php

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$searchArr = array(
	'post_type' => 'seminar',
	'posts_per_page' => 12,
	'post_status' => 'publish',
	'order'=>'DESC',
	'orderby'=>'date',
	'paged'=>$paged,
);

$currentTax = '';

$taxQueryArr = array();
if(is_null($term) == false) {
	$tax = get_term_by('slug', $term, 'seminar_cat');
	$currentTax = $tax->name;
	$taxQueryArr[] = array(
		array(
			'taxonomy' => 'seminar_cat',
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



$cats = get_terms('seminar_cat', array(
	'hide_empty' => false
));



get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Seminar</span>
			<h1>省エネ業界最新ニュース・セミナー情報</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>省エネ業界最新ニュース・セミナー情報</span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<div class="area-tab">
				<ul>
					<?php
						foreach($cats as $c):
							if($c->name == '関東'):
								$childs = get_terms('seminar_cat', array(
									'hide_empty' => false,
									'parent' => $c->term_id
								));
					?>
							<li><span><?php echo $c->name; ?></span>
								<?php if(empty($childs) === false): ?>
								<ul>
									<?php foreach($childs as $child): ?>
									<li><a href="<?php get_url(); ?>/seminar/seminar_cat/<?php echo $child->slug; ?>"><?php echo $child->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
							</li>
						<?php
							elseif($c->name == '省エネ業界最新ニュース'):
								$childs = get_terms('seminar_cat', array(
									'hide_empty' => false,
									'parent' => $c->term_id
								));
					?>
							<li><a href="<?php get_url(); ?>/seminar/seminar_cat/<?php echo $c->slug; ?>"><?php echo $c->name; ?></a></span>
								<?php if(empty($childs) === false): ?>
								<ul>
									<?php foreach($childs as $child): ?>
									<li><a href="<?php get_url(); ?>/seminar/seminar_cat/<?php echo $child->slug; ?>"><?php echo $child->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
							</li>
						<?php
							elseif($c->parent == 0):
						?>
							<li><a href="<?php get_url(); ?>/seminar/seminar_cat/<?php echo $c->slug; ?>"><?php echo $c->name; ?></a>
						<?php endif; endforeach; ?>
				</ul>
			</div>

			<h2 class="parts-main-title">ニュース・セミナー 一覧<?php if(is_null($term) === false) echo '(' . $tax->name . ')'; ?></h2>

			<!-- 2024.08.27 Googleカレンダー非表示
			<div class="calendar">
				<div class="calendar-box<?php if($currentTax == '東京都') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=oak2jnue2sona2fvic0loirsn8%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '千葉県') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=gvife286cts91atddhpre6lh2s%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '埼玉県') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=5300pn50h79aj1v7mhvjdda2pk%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '神奈川県') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=mjpk5leokq0th5vvteht6ht06g%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == 'その他') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=oq097nv4ltek6atvom1sce2i98%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '関西') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=76l79fhqf6r4m0u6i6cgngleds%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '東北・北海道') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=vhtb6htr87ha3ol08aeaj0egm4%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '中国・四国') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=cuq1fc73da5524t6alo7f6lvjo%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="calendar-box<?php if($currentTax == '九州・沖縄') echo ' show'; ?>">
					<iframe src="https://calendar.google.com/calendar/embed?src=prlpj9vhflk545oopgadvkjcks%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			-->
			<div class="list">
				
				<?php
					while ($post_query->have_posts()) : $post_query->the_post();
						$title = get_the_title();
						if(mb_strlen($title) > 13) $title = mb_substr($title, 0, 13) . '...';
						$cs = get_the_terms($post->ID, 'seminar_cat');

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
						<?php if(is_array($cs)): ?>
						<div class="category">
							<?php foreach($cs as $c): ?>
							<span><?php echo $c->name; ?></span>
							<?php endforeach; ?>
						</div>
						<?php endif; ?>
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