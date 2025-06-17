<?php get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Faq</span>
			<h1>よくある質問</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<a href="<?php get_url(); ?>/faq">よくある質問一覧</a>
	<span>/</span>
	<span><?php the_title(); ?></span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<h2 class="parts-main-title"><?php the_title(); ?></h2>


			<div class="post-body mt50" style="font-size: 16px; min-height: 150px;">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</div>

			<div class="btn blue mt50 center-text">
				<a href="<?php get_url(); ?>/faq" class="button waves-effect">よくある質問一覧へ</a>
			</div>

			<?php
				$nextP = get_next_post();
				$prevP = get_previous_post();
			?>


		</div>
	</div>
	<!-- /.contents-box c-box01 -->

</div>
<!-- /#contents -->



<?php get_footer(); ?>