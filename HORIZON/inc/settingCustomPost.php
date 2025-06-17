<?php


setCustomPost('お知らせ&amp;ブログ', 'news', false, false, '', '');

setCustomPost('コラム', 'column', true, true, 'コラムカテゴリー', 'cat');

setCustomPost('セミナー情報', 'seminar', true, true, 'セミナー情報カテゴリー', 'cat');

setCustomPost('お客様の声', 'voice', false, false, '', '');

setCustomPost('実績一覧', 'result', false, false, '', '');

setCustomPost('よくある質問', 'faq', true, true, 'よくある質問カテゴリー', 'cat');

setCustomPost('環境性能認証不動産ニュース', 'certification_news', true, true, '環境性能認証不動産ニュースカテゴリー', 'cat');

setCustomPost('環境性能認証不動産一覧', 'certification_list', false, false, '', '');

setCustomPost('技術支援アドバイザー', 'advisor', false, false, '', '');




function setCustomPost($label, $slug, $taxonomy=false, $taxHierarchical=true, $taxLabel, $taxSlug) {

	//カスタム投稿
	$labels = array(
		'name' => _x($label, 'post type general name'),
		'singular_name' => _x($label . '一覧', 'post type singular name'),
		'add_new' => _x('新しく' . $label . 'を追加する', $slug),
		'add_new_item' => __($label . '新規追加'),
		'edit_item' => __($label . 'を編集'),
		'new_item' => __('新しい' . $label),
		'view_item' => __($label . '一覧を見る'),
		'search_items' => __($label . 'を探す'),
		'not_found' => __('記事はありません'),
		'not_found_in_trash' => __('ゴミ箱に記事はありません'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'menu_position' => 5,
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => $slug)
	);
	register_post_type($slug, $args);

	//カテゴリータイプ
	if($taxonomy) {
		$args = array(
		'label' => $taxLabel,
		'public' => true,
		'show_ui' => true,
		'hierarchical' => $taxHierarchical
		);
		register_taxonomy($slug . '_' . $taxSlug, $slug, $args);
	}
}




?>