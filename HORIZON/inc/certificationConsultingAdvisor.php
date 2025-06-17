<!-- 技術支援アドバイザー -->
<?php if(!is_post_type_archive('advisor')) :?>
<?php
$searchArr = array(
  'post_type' => 'advisor',
  'meta_query' => array(
    array(
      'key'   => 'advisor_module',
      'value' => 'ON',
    )
  ),
  'posts_per_page' => 4,
  'post_status' => 'publish',
  'orderby'=>'rand',
);
$post_query = new WP_Query($searchArr); ?>
<div class="advisor-box">
  <div class="contents-inner">
    <div class="midashi section-title"><span><b>環境・省エネルギー計算センター<br class="pc">技術支援アドバイザー</b></span></div>
    <ul>
      <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
      <li>
        <div class="advisor-box_image">
          <div><img src="<?php the_field('advisor_image'); ?>"></div>
        </div>
        <div class="advisor-box_name">
          <div><?php the_field('advisor_name_en'); ?></div><div><?php the_title(); ?></div>
        </div>
        <div class="advisor-box_place">
          <div><?php the_field('advisor_place'); ?></div>
        </div>
      </li>
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <div class="advisor-box_button btn blue">
      <a href="https://test.ceec.jp/advisor"><span>技術支援アドバイザー一覧ページ</span></a>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- //技術支援アドバイザー -->