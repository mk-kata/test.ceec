<?php get_header(); ?>



	<?php if(have_posts()):while(have_posts()):the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile;endif; ?>



	<?php
			$nextP = get_next_post(true, '', 'blog_tax');
			$prevP = get_previous_post(true, '', 'blog_tax');
		?>

		<div class="pager">
			<?php if ($prevP): ?>
				<div class="previous-link btn black">
					<a href="<?php echo get_the_permalink($prevP->ID); ?>" class="button waves-effect">戻る</a>
				</div>
			<?php endif; ?>


			<?php if ($nextP): ?>
				<div class="next-link btn black">
				<a href="<?php echo get_the_permalink($nextP->ID); ?>" class="button waves-effect">次へ</a>
			</div>
			<?php endif; ?>

		</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>