<?php get_header(); ?>


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
    <a href="<?php get_url(); ?>/seminar">省エネ業界最新ニュース・セミナー情報</a>
    <span>/</span>
    <span><?php the_title(); ?></span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<h2 class="parts-main-title"><?php the_title(); ?></h2>

			<div class="post-date right-text"><?php echo get_post_time('Y.m.d (D)'); ?></div>

			<div class="post-body">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</div>

			<div class="btn blue mt50 center-text">
				<a href="<?php get_url(); ?>/seminar" class="button waves-effect">セミナー一覧へ</a>
			</div>

			<?php
				$nextP = get_next_post(true, '', 'seminar_cat');
				$prevP = get_previous_post(true, '', 'seminar_cat');
			?>

			<div class="post-pager mt50">
				<div class="prev-btn">
					<?php if ($prevP): ?>
						<a href="<?php echo get_the_permalink($prevP->ID); ?>">前の記事</a>
					<?php endif; ?>
				</div>
				<div class="next-btn">
					<?php if ($nextP): ?>
						<a href="<?php echo get_the_permalink($nextP->ID); ?>">次の記事</a>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
	<!-- /.contents-box c-box01 -->

</div>
<!-- /#contents -->



<?php get_footer(); ?>