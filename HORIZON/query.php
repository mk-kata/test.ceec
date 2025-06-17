<?php


const POST_PER_PAGE = 10;  //1ページの表示件数
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

//通常
$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'paged'=>$paged,
	)
);

//カテゴリ
$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'cat'=> 'カテゴリーID',
		'category_name'=>'カテゴリー',
		'paged'=>$paged,
	)
);

//日付アーカイブ
$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'year'=> 1990,
		'monthnum'=> 10,
		'paged'=>$paged,
	)
);


//tax_query, meta_query
$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => POST_PER_PAGE,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'date',
		'paged'=>$paged,
		'tax_query' => array(
			array(
				'taxonomy' => 'sp_type',
				'terms' => $cat,
				'field'=>'slug',
				'operator' => 'IN',
				),
			),
		'meta_query' => array(
			array(
				'key' => 'month',
				'value' => $month,
				'compare'=>'IN'
				),
			array(
				'key' => 'studio',
				'value' => $studio,
				'compare'=>'LIKE'
				),
			array(
				'key' => 'display_flag',
				'value' => 'no',
				'compare'=>'NOT LIKE'
				),
			'relation'=>'AND'
		),
	)
);


//metaでソート
$post_query = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'nopaging' => -1,
		'post_status' => 'publish',
		'order'=>'DESC',
		'orderby'=>'meta_value_num',
		'meta_key'=>'sort_number'
	)
);


?>

<?php
	while ($post_query->have_posts()) : $post_query->the_post();
?>

<?php endwhile; wp_reset_postdata(); ?>


<?php

if(get_field('stdio_input')) {
	while(the_repeater_field('stdio_input')) {
		get_sub_field('test');
	}
}
?>


<?php wp_pagenavi(array('query'=>$post_query)); ?>



?>

<?php

$paged = get_query_var('page') ? get_query_var('page') : 1 ;
$searchArr = array(
	'post_type' => 'post',
	'posts_per_page' => POST_PER_PAGE,
	'post_status' => 'publish',
	'order'=>'DESC',
	'orderby'=>'date',
	'paged'=>$paged,
);


//ソート
$sortArr = array(
	'orderby'=>'meta_value_num',
	'meta_key'=>'evaluation1_0_ratings',
	'order'=>'DESC'
);

$searchArr += $sortArr;


$taxQueryArr = array();
$taxQueryArr[] = array(
	array(
		'taxonomy' => 'type',
		'terms' => $s2Ar,
		'field' => 'slug',
		'operator' => 'IN',
	),
);


$metaQueryArr = array();
$metaQueryArr[] = array(
	array(
		'key' => 'rankin',
		'value' => $s4,
	),
);


$metaQueryArr += array(
	'relation' => 'OR'
);

$taxQueryArr += array(
	'relation' => 'OR'
);


if(empty($metaQueryArr) === false) {
	$searchArr += array(
		'meta_query' => $metaQueryArr,
	);
}

if(empty($taxQueryArr) === false) {
	$searchArr += array(
		'tax_query' => $taxQueryArr,
	);
}

$search_query = new WP_Query($searchArr);

?>