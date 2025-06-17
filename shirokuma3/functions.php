<?php

/*
 * WooCommerce Theme Support
 */
function theme_add_wc_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'theme_add_wc_support' );

//WCサイドバー削除
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


//the_posts_paginationのマークアップ変更
function custom_the_posts_pagination($template)
{
    $template = '<div class="page-numbers">%3$s</div>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');

//singleのページネーションのマークアップ変更
function add_prev_post_link_class($output) {
	return str_replace('<a href=', '<a class="p-button p-button--blue p-button--arrow" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_next_post_link_class($output) {
	return str_replace('<a href=', '<a class="p-button p-button--blue p-button--arrow" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );


//pre_get_postsのカスタマイズ
function custom_pre_get_posts($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    // フロントページの表示件数を変更
    // if ( $query-> is_front_page() ) {
    //     $query->set( 'posts_per_page', '5' );
    // }
    // if ($query->is_tax('study_type')) {
    //     $query->set('orderby', 'menu_order');
    //     $query->set('order', 'ASC');
    // }
    // if ($query->is_archive('column')) {
    //     $query->set( 'posts_per_page', '1' );
    // }
    if ($query->is_archive('faq')) {
        $query->set( 'posts_per_page', '-1' );
    }
	if ($query->is_archive('result')) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action('pre_get_posts', 'custom_pre_get_posts');





/**
 *
 * ACFオプションページ
 *
 */

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'オプション設定',
        'menu_title' => 'オプション設定',
        'menu_slug' => 'option_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/*【管理画面】投稿メニューを非表示 */
function remove_menus()
{
	global $menu;
	remove_menu_page('edit.php'); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');

/**
 *
 * カスタム投稿タイプ
 *
 */
function create_post_type() {
	// お知らせ -------------- //
	register_post_type(
		'news',
		array(
			'label' => 'お知らせ',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				// 'thumbnail',
				'revisions'
			)
		)
	);

	// 業界ニュース -------------- //
	register_post_type(
		'industry_news',
		array(
			'label' => '業界ニュース',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				// 'thumbnail',
				'revisions'
			)
		)
	);
	register_taxonomy(
		'industry_news_cat',
		'industry_news',
		array(
			'label' => 'カテゴリー',
			'labels' => array(
				'all_items' => 'カテゴリー一覧',
				'add_new_item' => 'カテゴリーを追加'
			),
			'hierarchical' => true,
			'show_in_rest' => true,
			'rewrite'  => array(
				'slug' => 'industry_news/industry_news_cat'
			)
		)
	);

	// 安心の対応実績 -------------- //
	register_post_type(
		'result',
		array(
			'label' => '安心の対応実績',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				// 'thumbnail',
				'revisions'
			)
		)
	);

	// お客様の声 -------------- //
	register_post_type(
		'voice',
		array(
			'label' => 'お客様の声',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'revisions'
			)
		)
	);

	// よくある質問 -------------- //
	register_post_type(
		'faq',
		array(
			'label' => 'よくある質問',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				// 'thumbnail',
				'revisions'
			)
		)
	);

	// コラム -------------- //
	register_post_type(
		'column',
		array(
			'label' => 'コラム',
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'show_in_rest' => true,
			// 'menu_icon' => 'dashicons-hammer',
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'revisions'
			)
		)
	);
	register_taxonomy(
		'column_cat',
		'column',
		array(
			'label' => 'カテゴリー',
			'labels' => array(
				'all_items' => 'カテゴリー一覧',
				'add_new_item' => 'カテゴリーを追加'
			),
			'hierarchical' => true,
			'show_in_rest' => true,
			'rewrite'  => array(
				'slug' => 'column/column_cat'
			)
		)
	);

}
add_action( 'init', 'create_post_type' );

//コラムと業界ニュースのタクソノミーURLを変更
add_rewrite_rule('^column/column_cat/([^/]+)/?', 'index.php?column_cat=$matches[1]', 'top');

add_rewrite_rule('^industry_news/industry_news_cat/([^/]+)/?', 'index.php?industry_news_cat=$matches[1]', 'top');



//固定ページや記事の任意の箇所でPHPファイルをincludeするショートコード
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


//body_class()にページスラッグを
function pagename_class($classes = '')
{
    if (is_page() && !is_page("ホーム")) {
        $page = get_page(get_the_ID());
        $classes[] = $page->post_name;
    }
    return $classes;
}
add_filter('body_class', 'pagename_class');

//カスタムメニュー
add_theme_support('menus');

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

/* 作成するサムネイルのサイズ設定 */
add_image_size('thumb-600_400', 600, 400, true);
// add_image_size( 'thumb-240_320', 240, 320, true );
// add_image_size( 'thumb-200_100', 200, 100, true );

//テンプレートフォルダのパスをショートコードに登録
function shortcode_templateurl()
{
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');

//HOMEのURLをショートコードで表示
add_shortcode( 'homeurl', 'shortcode_homeurl' );
function shortcode_homeurl( $atts, $content = '' ) {
	return esc_url( home_url() ).$content;
}

//タイトル文字数制限して...を表示
function trim_str_by_chars($str, $len, $echo = true, $suffix = '…', $encoding = 'UTF-8')
{
    if (!function_exists('mb_substr') || !function_exists('mb_strlen')) {
        return $str;
    }
    $len = (int)$len;
    if (mb_strlen($str = wp_specialchars_decode(strip_tags($str), ENT_QUOTES, $encoding), $encoding) > $len) {
        $str = wp_specialchars(mb_substr($str, 0, $len, $encoding) . $suffix);
    }
    if ($echo) {
        echo $str;
    } else {
        return $str;
    }
}


// アセット用のURLを定義
define('WP_ASSET_URL', get_template_directory_uri().'/assets');

/**
* アセットURLの取得
*
* @param string $path   画像やJSまでのパス
* @return string
*/
function _asset_url($path = '') {
    $url = rtrim(WP_ASSET_URL, '/');
    if( strpos($path, '/') !== 0 ) {
        $url .= '/';
    }
    $url .= $path;
    if( preg_match('/\.(css|js|jpe?g|png|gif|svg)/', $url, $matches) ) {
        $version = wp_get_theme()->get('Version');
        $url = add_query_arg(['ver' => $version], $url);
    }
    return $url;
}

/**
* アセットURLの出力
*
* @param string $path   画像やJSまでのパス
* @return string
*/
function _e_asset_url($path = '') {
    echo _asset_url($path);
}



// カテゴリーとタグのmeta descriptionからpタグを除去
remove_filter('term_description','wpautop');
