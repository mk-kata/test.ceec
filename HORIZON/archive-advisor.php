<?php
$searchArr = array(
	'post_type' => 'advisor',
	'nopaging' => -1,
	'post_status' => 'publish',
	'order'=>'ASC',
	'orderby'=>'date',
);
$post_query = new WP_Query($searchArr);
get_header(); ?>

<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Advisor</span>
			<h1>技術支援アドバイザー</h1>
		</div>
	</div>
</div>
<nav id="breadCrumb">
  <div class="contents-inner">
		<a href="<?php get_url(); ?>">TOP</a>
		<span>/</span>
		<span>技術支援アドバイザー</span>
  </div>
</nav>

<div id="contents">

		<section id="ceec_advisor" class="contents-box">
		<ul class="contents-inner">
			<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
			  <li class="box">
			    <div class="ceec_advisor_main">
			      <div class="ceec_advisor_image">
			        <div><img src="<?php the_field('advisor_image'); ?>"></div>
			      </div>
			      <div class="ceec_advisor_text">
			        <div class="ceec_advisor_text_name">
			          <div><?php the_field('advisor_name_en'); ?></div><div><?php the_title(); ?></div>
			        </div>
			        <div class="ceec_advisor_text_place">
			          <div><?php the_field('advisor_place'); ?></div>
			        </div>
			        <div class="ceec_advisor_text_description">
			          <div><?php the_field('advisor_description'); ?></div>
			        </div>
			      </div>
			    </div>
					<?php if(have_rows('advisor_table')): ?>
				    <div class="ceec_advisor_text_table" style="display:none;">
				      <ul>
									<?php while(have_rows('advisor_table')): the_row(); ?>
										<?php if(have_rows('advisor_table_enter')): ?>
											<?php while(have_rows('advisor_table_enter')): the_row(); ?>
								      	<li>
								          <div><?php the_sub_field('advisor_table_enter_title'); ?></div>
								          <div><?php the_sub_field('advisor_table_enter_content'); ?></div>
								        </li>
											<?php endwhile; ?>
										<?php endif; ?>
									<?php endwhile; ?>
				      </ul>
				      <div class="ceec_advisor_toggle-close">
				        <span>閉じる</span>
				      </div>
				    </div><!-- /.ceec_advisor_text_table -->
				    <div class="ceec_advisor_toggle-open">
				      <span>詳しく見る</span>
				    </div>
			    <?php endif; ?>
			  </li>
		  <?php endwhile; wp_reset_postdata(); ?>
		</ul>
		</section>

</div>
<!-- /#contents -->

<?php get_footer(); ?>