
<?php get_header(); ?>
<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">
            <h2 class="section-title title1">404 Not Found<br>（ページが見つかりませんでした）</h2>
            <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
            <p class="error_url"><?php echo get_pagenum_link(); ?></p>

            <div class="btn blue"><a href="<?php echo home_url(); ?>" class="button waves-effect"><span>トップページへ</span></a></div>
        </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>