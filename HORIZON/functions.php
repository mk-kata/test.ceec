<?php

function author_archive_redirect() {
   if( is_author() ) {
       wp_redirect( home_url());
       exit;
   }
}
add_action( 'template_redirect', 'author_archive_redirect' );

//カスタム投稿
require_once(dirname(__FILE__) . '/inc/settingCustomPost.php');


//アイキャッチ設定
add_theme_support('post-thumbnails');

//アイキャッチサイズ
add_image_size('voiceThumb', 520, 220, true);
add_image_size('columnThumb', 351, 234, true);
add_image_size('resultThumb', 351, 234, true);


// the_excerpt() [...]を...にする
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


//抜粋文字数
function new_excerpt_mblength($length) {
	return 50; //抜粋する文字数を50文字に設定
}
add_filter('excerpt_length', 'new_excerpt_mblength');


//blogurlのショートコード
function shortcode1() {
  return get_bloginfo('url');
}
add_shortcode('url', 'shortcode1');


//template_directoryのショートコード
function shortcode2() {
  return get_bloginfo('template_directory');
}
add_shortcode('tempd', 'shortcode2');


//テンプレートファイルでショートコードを使う
// echo do_shortcode('[xxxxxx]');





//URLに引数の文字列が含まれているかどうか
function chkURL($text) {
	$url = $_SERVER['REQUEST_URI'];
	if(strpos($url, $text) !== false) return true;
	else return false;
}


function get_td() {
	echo get_bloginfo('template_directory');
}

function get_url() {
	echo get_bloginfo('url');
}




//自動整形を無効
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする
// add_filter('the_content','custom_content');
// function custom_content($content){
// if(get_post_type()=='page')
//     return $content; //
// else
//  return wpautop($content);
// }


//headタグ内を整理
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');







//管理画面の順番変更
// function custom_menu_order($menu_ord) {
// 	if (!$menu_ord) return true;
// 	return array(
// 		'index.php', // ダッシュボード
// 		'separator1', // 隙間
// 		'edit.php',
// 		'edit.php?post_type=page', // 固定ページ
// 		'separator2', // 隙間
// 		'upload.php', // メディア
// 		'themes.php', // 外観
// 		'plugins.php', // プラグイン
// 		'users.php', // ユーザー
// 		'tools.php', // ツール
// 		'options-general.php', // 設定
// 		'separator-last', // 隙間
// 	);
// }
// add_filter('custom_menu_order', 'custom_menu_order');
// add_filter('menu_order', 'custom_menu_order');




// // 使用しないメニューを非表示にする
function remove_admin_menus() {

	// level10以外のユーザーの場合
	//if (!current_user_can('level_10')) {

		global $menu;

		// unsetで非表示にするメニューを指定
		//unset($menu[2]);	// ダッシュボード
		unset($menu[5]);	// 投稿
		//unset($menu[10]);	// メディア
		//unset($menu[20]);	// 固定ページ
		//unset($menu[25]);	// コメント
		//unset($menu[60]);	// 外観
		//unset($menu[65]);	// プラグイン
		//unset($menu[70]);	// ユーザー
		//unset($menu[75]);	// ツール
		//unset($menu[80]);	// 設定
	//}
}
add_action('admin_menu', 'remove_admin_menus');



// //投稿の名称を変更
// function change_post_menu_label() {
// 	global $menu;
// 	global $submenu;
// 	$menu[5][0] = '投稿';
// 	$submenu['edit.php'][5][0] = '記事一覧';
// 	$submenu['edit.php'][10][0] = '新しく記事を追加する';
// 	//echo ”;
// }
// function change_post_object_label() {
// 	global $wp_post_types;
// 	$labels = &$wp_post_types['post']->labels;
// 	$labels->name = '投稿';
// 	$labels->singular_name = '投稿';
// 	$labels->add_new = _x('新規作成', '記事');
// 	$labels->add_new_item = '記事新規追加';
// 	$labels->edit_item = '記事の編集';
// 	$labels->new_item = '新しい記事';
// 	$labels->view_item = '記事を表示';
// 	$labels->search_items = '記事検索';
// 	$labels->not_found = '記事が見つかりませんでした';
// 	$labels->not_found_in_trash = 'ゴミ箱に見つかりませんでした';
// }
// add_action( 'init', 'change_post_object_label' );
// add_action( 'admin_menu', 'change_post_menu_label' );




//  * 投稿のアーカイブページを設定
//  */
// function post_has_archive($args, $post_type) {
// 	if ('post' == $post_type) {
// 		global $wp_rewrite;
// 		$archive_slug = 'contents';
// 		$args['has_archive'] = $archive_slug;
// 		$archive_slug = $wp_rewrite->root.$archive_slug;
// 		$feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
// 		add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
// 		add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
// 		add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
// 		add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
// 	}
// 	return $args;
// }
// add_filter('register_post_type_args', 'post_has_archive', 10, 2);



//bodyClassにページスラッグ表示
function pagename_class($classes = '') {
	global $post;

	if(!is_home()) $classes[] = 'sub';


	if(is_page()) $classes[] = $post->post_name;

	if(is_post_type_archive() || is_tax()) $classes[] = get_post_type();
	if(is_post_type_archive('certification_list')) $classes[] = 'certification_list';

	if(is_tax('seminar_cat')) $classes[] = 'seminar';

	if(is_singular()) $classes[] = get_post_type() . '-detail';

	if(is_page('service')) $classes[] = 'energy_saving';
	if(is_page('casbee')) $classes[] = 'energy_saving';
	if(is_page('bels')) $classes[] = 'energy_saving';
	if(is_page('assessment')) $classes[] = 'energy_saving';
	if(is_page('energy_decision')) $classes[] = 'energy_saving';
	if(is_page('environmental_planning')) $classes[] = 'energy_saving';
	if(is_page('casbee_certification')) $classes[] = 'energy_saving';
	if(is_page('certification_consulting')) $classes[] = 'energy_saving';
	if(is_page('improve-profit')) $classes[] = 'improve_profit';

	if(chkURL("supporting-group")) $classes[] = "support-group";

	if(is_page("contact") || chkURL("contact/thanks")) $classes[] = "contact";


	return $classes;
}
add_filter('body_class','pagename_class');




// function manage_kuchikomi_columns($columns) {
// 	$columns['target'] = "対象サイト";
// 	return $columns;
// }

// function add_kuchikomi_column($column_name, $post_id) {
// 	if( $column_name == 'target' ) {
// 		$id = get_post_meta($post_id, 'target', true);
// 	}
// 	if($id != '') {
// 		$query = new WP_Query(
// 			array(
// 				'post_type' =>'case',
// 				'p' => $id
// 			)
// 		);
// 		while ($query->have_posts()) : $query->the_post();
// 			echo get_the_title();
// 		endwhile; wp_reset_postdata();
// 	}
// 	else { echo 'なし'; }
// }
// add_filter( 'manage_edit-kuchikomi_sortable_columns', 'manage_kuchikomi_columns' );
// add_filter( 'manage_kuchikomi_posts_columns', 'manage_kuchikomi_columns' );
// add_action( 'manage_kuchikomi_posts_custom_column', 'add_kuchikomi_column', 10, 2 );




//WORKSのメニュー追加
// function test_admin_menu() {
// 	add_submenu_page( 'edit.php?post_type=works', '○○○', '■ ○○○', 8, 'edit.php?post_type=xxx');
// }
// add_action( 'admin_menu', 'test_admin_menu' );



//ビジュアル、テキストの切り替えでタグ削除を防ぐ
function custom_editor_settings( $initArray ){
	$initArray['body_id'] = 'primary';	// id の場合はこれ
	$initArray['body_class'] = 'post';	// class の場合はこれ
	// styleや、divの中のdiv,span、spanの中のspanを消させない
	$initArray['valid_children'] = '+body[style],+div[div|span],+span[span],+p';
	// 空タグや、属性なしのタグとか消そうとしたりするのを停止。余計なことすんな！
	$initArray['verify_html'] = false;
	// []←ショートコードを&#91;とかのままにしたかったけど出来なかった…。
	//$initArray['entity_encoding'] = 'raw';
	//$initArray['entities'] = '91,93';
	$initArray['indent']  = true;
	$initArray['wpautop'] = false;
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


add_rewrite_rule('column/column_cat/([^/]+)?$', 'index.php?column_cat=$matches[1]', 'top');
add_rewrite_rule('faq/faq_cat/([^/]+)?$', 'index.php?faq_cat=$matches[1]', 'top');
add_rewrite_rule('seminar/seminar_cat/([^/]+)?$', 'index.php?seminar_cat=$matches[1]', 'top');
add_rewrite_rule('certification_news/certification_news_cat/([^/]+)?$', 'index.php?certification_news_cat=$matches[1]', 'top');



function get_archive_year_list($pt) {
	$args = array(
		'post_type' => $pt,
		'nopaging' => -1,
		'order'=>'DESC',
		'orderby'=>'date',
	);
	$archive_query = new WP_Query($args);

	while ($archive_query->have_posts()) : $archive_query->the_post();
		$archive_list[get_the_time('Y', $post->ID)][] = $post->post_title;
	endwhile; wp_reset_postdata();

	return $archive_list;
}


function get_archive_list($pt) {
	$args = array(
		'post_type' => $pt,
		'nopaging' => -1,
		'order'=>'DESC',
		'orderby'=>'date',
	);
	$archive_query = new WP_Query($args);

	while ($archive_query->have_posts()) : $archive_query->the_post();
		$archive_list[get_the_time('Y/n', $post->ID)][] = $post->post_title;
	endwhile; wp_reset_postdata();

	return $archive_list;
}


//フォームエラー文言
add_filter( 'mwform_error_message_mw-wp-form-18', 'custom_mwform_error_message', 10, 3 );
function custom_mwform_error_message( $error, $key, $rule ) {
	if ( $key === '姓' && $rule === 'noempty' ) {
		return '姓が未入力です。';
	}
	if ( $key === '名' && $rule === 'noempty' ) {
		return '名が未入力です。';
	}
	if ( $key === 'セイ' && $rule === 'noempty' ) {
		return 'セイが未入力です。';
	}
	if ( $key === 'メイ' && $rule === 'noempty' ) {
		return 'メイが未入力です。';
	}

	return $error;
}

// added by kushida 200527================================================================================

// VOICE-------------------------------------------------------
function shortcode4() {

	$post_query = new WP_Query(
		array(
			'post_type' => 'voice',
			'posts_per_page' => 2,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'date',
		)
	);

	$html = '';

	$html .= '<div class="contents-box c-box11" id="ANC_VOICE">';
	$html .= '<div class="contents-inner">';
	$html .= '<h2 class="midashi section-title">お客様の声</h2>';
	$html .= '<p class="lead-text">当センターをご利用になったお客様からのメッセージをご紹介いたします。</p>';
	$html .= '<div class="list">';

		while ($post_query->have_posts()) : $post_query->the_post();
			$img = get_post_thumbnail_id();
			$img = wp_get_attachment_image_src($img, 'voiceThumb', true);

			$html .= '<div class="item">';
			$html .= '<div class="thumbnail"><img src="' . $img[0] . '" alt="'. get_the_title() .'">';
			$html .= '<span class="caption">'. get_field('user') . '</span>';
			$html .= '</div>';
			$html .= '<div class="item-title">' . get_the_title() . '</div>';
			$html .= '<p>' . get_the_excerpt() . '</p>';
			$html .= '<div class="btn white border-blue">';
			$html .= '<a href="' . get_the_permalink(). '" class="button waves-effect">詳細を読む</a>';
			$html .= '</div>';
			$html .= '</div>';


		endwhile; wp_reset_postdata();

	$html .= '</div>';
	$html .= '<div class="btn blue">';
	$html .= '<a href="' . get_bloginfo('url') . '/voice" class="button waves-effect"><span>お客様の声一覧</span></a>';
	$html .= '</div>';
	$html .= '<!-- /.contents-box voice-box -->';

	return $html;
}
add_shortcode('voicebox', 'shortcode4');


// FAQ-------------------------------------------------------

function shortcode5($arg) {

	if(isset($arg[0])) {
		$post_query = new WP_Query(
			array(
				'post_type' => 'faq',
				'posts_per_page' => 3,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
				'tax_query' => array(
					array(
						'taxonomy' => 'faq_cat',
						'terms' => $arg[0],
						'field'=>'slug',
						'operator' => 'IN',
					),
				)
			)
		);
	}
	else {
		$post_query = new WP_Query(
			array(
				'post_type' => 'faq',
				'posts_per_page' => 3,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
			)
		);
	}

	$html = '';

	$html .= '<div class="contents-box c-box11" id="ANC_FAQ">';
	$html .= '<div class="contents-inner">';
	$html .= '<h2 class="section-title"><div class="title">よくある質問</div></h2>';
	$html .= '<div class="lead-text">お客様から寄せられるよくある質問です。ご不明点はお気軽にお問合わせください。</div>';
	$html .= '<div class="faq-list">';

	while ($post_query->have_posts()) : $post_query->the_post();
		global $post;

		$html .= '<div class="item">';
		$html .= '<div class="question">' . get_the_title() . '</div>';
		$html .= '<div class="answer">';
		$html .= '<div class="inner">' . get_the_content() . '</div>';
		$html .= '</div>';
		$html .= '</div>';

	endwhile; wp_reset_postdata();

	$html .= '</div>';
	$html .= '<div class="btn blue mt50">';
	$html .= '<a href="' . get_bloginfo('url') . '/faq" class="button waves-effect">よくある質問をもっと読む</a>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '<!-- /.contents-box faq-box -->';


	return $html;
}
add_shortcode('faqbox', 'shortcode5');


// RESULT-------------------------------------------------------
function shortcode6($arg) {
	global $post;

	$post_query = new WP_Query(
		array(
			'post_type' => 'result',
			'posts_per_page' => 3,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'date',
		)
	);

	$html = '';

	$html .= '<div class="contents-box c-box10" id="ANC_RESULT">';
	$html .= '<div class="contents-inner">';
	$html .= '<h2 class="section-title"><div class="title">実績一覧</div></h2>';
	$html .= '<div class="lead-text">累計2,600棟以上、現在は年間700棟程度をサポートさせて頂いております。実績の一部を紹介いたします。</div>';
	$html .= '<div class="result-list">';
		$count = 1;
		while ($post_query->have_posts()) : $post_query->the_post();
//			$txt = get_the_excerpt();
//			if(mb_strlen($txt) > 30) $txt = mb_substr($txt, 0 , 30) . '...';
//			$count = $count++;

			$html .= '<div class="result-item">';
			$html .= '<div class="number">0'. $count++ .'</div>';
			$html .= '<div class="content">';
			$html .= '<ul>';
			$html .= '<li><span>業務</span><span>' . get_field('gyoumu') . '</span></li>';
			$html .= '<li><span>種別</span><span>' . get_field('syubetsu') . '</span></li>';
			$html .= '<li><span>用途</span><span>' . get_field('youto') . '</span></li>';
			$html .= '</ul>';
			$html .= '<ul>';
			$html .= '<li><span>構造</span><span>' . get_field('kouzou') . '</span></li>';
			$html .= '<li><span>規模</span><span>' . get_field('kibo') . '</span></li>';
			$html .= '<li><span>建設地</span><span>' . get_field('kensetsuchi') . '</span></li>';
			$html .= '</ul>';
			$html .= '</div>';
			$html .= '</div>';

		endwhile; wp_reset_postdata();


	$html .= '<div class="btn blue">';
	$html .= '<a href="' . get_bloginfo('url') . '/result" class="button waves-effect">実績一覧</a>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '<!-- /.contents-box result-box -->';


	return $html;
}
add_shortcode('resultbox', 'shortcode6');



// FAQ-------------------------------------------------------

function shortcode7($arg) {

	$post_query = new WP_Query(
		array(
			'post_type' => 'faq',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'order'=>'DESC',
			'orderby'=>'date',
			'tax_query' => array(
				array(
					'taxonomy' => 'faq_cat',
					'terms' => $arg[0],
					'field'=>'slug',
					'operator' => 'IN',
				),
			)
		)
	);

	$html = '';

	$html .= '<div class="faq-list">';

	while ($post_query->have_posts()) : $post_query->the_post();
		global $post;

		$html .= '<div class="item">';
		$html .= '<div class="question">' . get_the_title() . '</div>';
		$html .= '<div class="answer">';
		$html .= '<div class="inner">' . get_the_content() . '</div>';
		$html .= '</div>';
		$html .= '</div>';

	endwhile; wp_reset_postdata();

	$html .= '</div>';


	return $html;
}
add_shortcode('supportfaqbox', 'shortcode7');



/* PHPの読み込み
---------------------------------------------------------- */
function my_php_Include($params = array()) {
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/$file.php");
	return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');


/**
 * ビジュアルエディタに表(テーブル)の機能を追加します。
 */
function mce_external_plugins_table($plugins) {
    $plugins['table'] = get_template_directory_uri() .'/js/plugin.min.js';
//    $plugins['table'] = '//cdn.tinymce.com/4/plugins/table/plugin.min.js';
    return $plugins;
}
add_filter( 'mce_external_plugins', 'mce_external_plugins_table' );

/**
 * ビジュアルエディタにテーブル用のボタンを追加します。
 */
function mce_buttons_table($buttons) {
    $buttons[] = 'table';
    return $buttons;
}
add_filter( 'mce_buttons', 'mce_buttons_table' );



// ================================================================================ //





// added by yokoyama 210727================================================================================

// CERTIFICATION NEWS-------------------------------------------------------
function shortcode8($arg) {

	if(isset($arg[0])) {
		$post_query = new WP_Query(
			array(
				'post_type' => 'certification_news',
				'posts_per_page' => 4,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
				'tax_query' => array(
					array(
						'taxonomy' => 'certification_news_cat',
						'terms' => $arg[0],
						'field'=>'slug',
						'operator' => 'IN',
					),
				)
			)
		);
	}
	else {
		$post_query = new WP_Query(
			array(
				'post_type' => 'certification_news',
				'posts_per_page' => 4,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
			)
		);
	}

	$html = '';

	$html .= '<div class="contents-box" id="ANC_CERTIFICATION_NEWS">';
	$html .= '<div class="contents-inner">';
	$html .= '<h2 class="section-title">環境性能認証不動産ニュース</h2>';

	$html .= '<div class="list">';


		while ($post_query->have_posts()) : $post_query->the_post();

			$cs = get_the_terms($post->ID, 'certification_news_cat');

			$html .= '<div class="item">';
			$html .= '<div class="date">' . get_post_time('Y.m.d (D)') . '</div>';
			$html .= '<div class="content">';
			$html .= '<div class="category">';
			foreach($cs as $c):
				$html .= '<span>' . $c->name . '</span>';
			endforeach;
			$html .= '</div>';
			$html .= '<div class="title">';
			$html .= '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';


		endwhile; wp_reset_postdata();

	$html .= '</div>';
	$html .= '<div class="btn blue mt50 center-text">';
	$html .= '<a href="'.get_bloginfo('url').'/certification_news" class="button waves-effect"><span>環境性能認証不動産ニュース一覧</span></a>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '<!-- /.contents-box certification_news_box -->';

	return $html;
}
add_shortcode('certification_news_box', 'shortcode8');

add_editor_style( 'editor-style.css' );
// ================================================================================ //




add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['input']['value'] = true;
	return $tags;
}

// added by kondo 230414===========================================================

add_action( 'init', function() {
	remove_post_type_support( 'gallery', 'editor' );
}, 99);

add_action( 'init', 'view_editor_delete' );
function view_editor_delete() {
	remove_post_type_support( 'advisor', 'editor' );
}

// added by kondo 230507===========================================================

/* コラム内容取得
---------------------------------------------------------- */
function column_content_get($column) {
	$post_num = $column[0];
	$post_deta_title = get_the_title($post_num);
	$post_deta_url = get_permalink($post_num);
	$post_deta_img = get_the_post_thumbnail_url($post_num,'medium');
	$post_deta_exc = wp_trim_words( get_the_content(), 110, '…' );
	$html = '';
	$html .= '<a class="contents-listblock_content_column" href="'.$post_deta_url.'">';
	$html .= '<div class="contents-listblock_content_column_media">';
	$html .= '<img src="'.$post_deta_img.'">';
	$html .= '</div>';
	$html .= '<div class="contents-listblock_content_column_text">';
	$html .= '<div>'.$post_deta_title.'</div>';
	$html .= '<div>'.$post_deta_exc.'</div>';
	$html .= '<div>'.$post_deta_url.'</div>';
	$html .= '</div>';
	$html .= '</a>';
	return $html;
}
add_shortcode('columnget', 'column_content_get');

/* 環境性能認証不動産ニュース
---------------------------------------------------------- */
function result_certification_news() {
	ob_start();
	include(STYLESHEETPATH . "/result_certification_news.php");
	return ob_get_clean();
}
add_shortcode('certificationnews', 'result_certification_news');

/* 技術支援アドバイザー
---------------------------------------------------------- */
function certification_consulting_advisor() {
	ob_start();
	include(STYLESHEETPATH . "/inc/certificationConsultingAdvisor.php");
	return ob_get_clean();
}
add_shortcode('certificationconsultingadvisor', 'certification_consulting_advisor');

/* CASBEE不動産の自己査定
---------------------------------------------------------- */
function parts_casbeeselfcheck($type) {
	$gender = $type[0];
	$position = $type[1];
	$html = '';
	$html .= '<div class="parts_casbeeselfcheck parts_casbeeselfcheck-'.$position.'">';
	$html .= '<a href="https://casbee-self-assessment.ceec.jp/">';
	$html .= '<div class="parts_casbeeselfcheck-text">';
	$html .= '<div>事前に取得可否･<br class="parts_casbeeselfcheck_sp">ランクがわかります！</div>';
	$html .= '<div>CASBEE不動産<br class="parts_casbeeselfcheck_sp">自己査定をする</div>';
	$html .= '</div>';
	$html .= '<div class="parts_casbeeselfcheck-img">';
	$html .= '<img src="'.get_template_directory_uri().'/images/common/parts_casbeeselfcheck-'.$gender.'.png" width="590px" height="530px">';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	return $html;
}
add_shortcode('parts_casbeeselfcheck', 'parts_casbeeselfcheck');



// added by sawa 240313===========================================================

/* WordPress標準のサイト内検索機能を無効化
---------------------------------------------------------- */
function search_404( $query ) {
	if ( is_search() ) {
		$query->set_404();
		status_header( 404 );
		nocache_headers();
	}
}
add_filter( 'parse_query', 'search_404' );



/* 「信頼の実績 画像ver」のショートコード作成
---------------------------------------------------------- */
if ( ! function_exists( 'part_track_record_img' ) ) {
    function part_track_record_img() {
        $html = '';
        $html .= '<div class="box round-title">';
        $html .= '<div class="box-title">信頼の実績！</div>';
        $html .= '<p>累計'. get_field('track_record_total', 'option') . 'の省エネ計算実績。現在、年間'.  get_field('track_record_annual', 'option') . 'をサポート。<br>戸建てや共同住宅、小規模事務所から大型工場まで対応可能！</p>';
        $html .= '<div class="img01"><img decoding="async" src="'. get_field('track_record_img', 'option') .'" alt="リピート率 93.7％"></div>';
        $html .= '<div class="img02"><img decoding="async" src="'. get_template_directory_uri() .'/images/energy_saving/sec01-img02.png" alt="最短納期1日"></div>';
        $html .= '<div class="img03"><img decoding="async" src="'. get_template_directory_uri() .'/images/energy_saving/sec01-img03.png" alt="類型実績 1,000棟以上"></div>';
        $html .= '<p class="jp_caution">※'. get_field('track_record_year', 'option') . '年 自社案件調べ</p>';
        $html .= '</div>';
        return $html;
    }
    add_shortcode( 'track_record_img', 'part_track_record_img' );
}

/* 「信頼の実績 テキストver」のショートコード作成
---------------------------------------------------------- */
if ( ! function_exists( 'part_track_record__text' ) ) {
    function part_track_record__text() {
        $html = '';
        $html .= '<div class="lead-text">累計' . get_field('track_record_total', 'option') . '、現在は年間' . get_field('track_record_annual', 'option') . 'をサポートさせて頂いております。実績の一部を紹介いたします。<br><span style="font-size:1.1rem;">※2025年 自社案件調べ</span></div>';
        return $html;
    }
    add_shortcode( 'track_record__text', 'part_track_record__text' );
}



/* 「見積り・問い合わせボタン」のショートコード作成
---------------------------------------------------------- */
if ( ! function_exists( 'part_quote_contact_button' ) ) {
    function part_quote_contact_button( $atts ) {
        // デフォルト値を設定
        $defaults = array(
            'margin_top' => ''
        );
        
        // ショートコードの属性とデフォルト値をマージ
        $atts = shortcode_atts( $defaults, $atts, 'quote_contact_button' );
        
        // margin-topの値を取得
        $margin_top = $atts['margin_top'];

        // margin_topクラスを設定（指定がある場合のみ）
        $margin_top_class = $margin_top ? ' mt' . esc_attr($margin_top) : '';

        $html = '<div class="btn red large' . $margin_top_class . ' text-center">';
        $html .= '<p class="p-lead">簡単入力・無料0円</p>';
        $html .= '<a href="' . esc_url(home_url('contact')) . '" class="button waves-effect"><span>見積もり・問い合わせをしてみる</span></a>';
        $html .= '</div>';
        return $html;
    }
    add_shortcode( 'quote_contact_button', 'part_quote_contact_button' );
}