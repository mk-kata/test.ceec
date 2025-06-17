<div class="contents-box" id="ANC_CERTIFICATION_NEWS">
	<div class="contents-inner">
		<h2 class="section-title">環境性能認証不動産ニュース</h2>

		<!-- 切り替え -->
		<nav id="newscategory" class="local-link arrow-right mt50">
			<ul>
				<li><a id="news_all">すべて</a></li>
				<li><a id="news_bels">BELS</a></li>
				<li><a id="news_casbee">CASBEE</a></li>
				<li><a id="news_dbj">DBJ Green Building認証</a></li>
			</ul>
		</nav>

		<!-- すべて -->
		<div id="news_alllist" class="list newslist">
			<?php
			$list_all = new WP_Query(
				array(
					'post_type' => 'certification_news',
					'posts_per_page' => 4,
					'post_status' => 'publish',
					'order'=>'DESC',
					'orderby'=>'date'
				)
			);
			?>
			<?php while ( $list_all->have_posts() ) : $list_all->the_post(); ?>
			<div class="item">
				<div class="date"><?php echo get_the_date(); ?></div>
				<div class="content">
					<div class="category">
						<?php
						$terms = get_the_terms($list_all->ID, 'certification_news_cat');
						if ($terms) :
					    foreach ($terms as $term) {
					      echo '<span>'.$term->name.'</span>';
					    }
						endif;
						?>
					</div>
					<div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- BELS -->
		<div id="news_belslist" class="list newslist" style="display:none;">
			<?php
			$list_bels = new WP_Query(
				array(
					'post_type' => 'certification_news',
					'posts_per_page' => 4,
					'post_status' => 'publish',
					'order'=>'DESC',
					'orderby'=>'date',
					'tax_query' => array(
						array(
							'taxonomy' => 'certification_news_cat',
							'field'=>'slug',
							'terms' => 'bels',
							'operator' => 'IN',
						),
					)
				)
			);
			?>
			<?php while ( $list_bels->have_posts() ) : $list_bels->the_post(); ?>
			<div class="item">
				<div class="date"><?php echo get_the_date(); ?></div>
				<div class="content">
					<div class="category">
						<?php
						$terms = get_the_terms($list_bels->ID, 'certification_news_cat');
						if ($terms) :
					    foreach ($terms as $term) {
					      echo '<span>'.$term->name.'</span>';
					    }
						endif;
						?>
					</div>
					<div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- CASBEE -->
		<div id="news_casbeelist" class="list newslist" style="display:none;">
			<?php
			$list_casbee = new WP_Query(
				array(
					'post_type' => 'certification_news',
					'posts_per_page' => 4,
					'post_status' => 'publish',
					'order'=>'DESC',
					'orderby'=>'date',
					'tax_query' => array(
						array(
							'taxonomy' => 'certification_news_cat',
							'field'=>'slug',
							'terms' => 'casbee',
							'operator' => 'IN',
						),
					)
				)
			);
			?>
			<?php while ( $list_casbee->have_posts() ) : $list_casbee->the_post(); ?>
			<div class="item">
				<div class="date"><?php echo get_the_date(); ?></div>
				<div class="content">
					<div class="category">
						<?php
						$terms = get_the_terms($list_casbee->ID, 'certification_news_cat');
						if ($terms) :
					    foreach ($terms as $term) {
					      echo '<span>'.$term->name.'</span>';
					    }
						endif;
						?>
					</div>
					<div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- DBJ -->
		<div id="news_dbjlist" class="list newslist" style="display:none;">
			<?php
			$list_dbj = new WP_Query(
				array(
					'post_type' => 'certification_news',
					'posts_per_page' => 4,
					'post_status' => 'publish',
					'order'=>'DESC',
					'orderby'=>'date',
					'tax_query' => array(
						array(
							'taxonomy' => 'certification_news_cat',
							'field'=>'slug',
							'terms' => 'dbj',
							'operator' => 'IN',
						),
					)
				)
			);
			?>
			<?php while ( $list_dbj->have_posts() ) : $list_dbj->the_post(); ?>
			<div class="item">
				<div class="date"><?php echo get_the_date(); ?></div>
				<div class="content">
					<div class="category">
						<?php
						$terms = get_the_terms($list_dbj->ID, 'certification_news_cat');
						if ($terms) :
					    foreach ($terms as $term) {
					      echo '<span>'.$term->name.'</span>';
					    }
						endif;
						?>
					</div>
					<div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<div class="btn blue mt50 center-text"><a href="<?php echo home_url(); ?>/certification_news" class="button waves-effect"><span>環境性能認証不動産ニュース一覧</span></a></div>

		</div><!--contents-inner-->
</div><!--contents-box-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
jQuery(function($){
	$(document).on('click', '#newscategory ul li a', function(){
	  $('.newslist').css('display','none');
	  let category = $(this).attr('id');
	  $('#'+category+'list').fadeIn('fast');
	  return false;
	});
});
</script>