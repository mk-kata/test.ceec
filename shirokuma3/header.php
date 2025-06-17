<!DOCTYPE html>
<html lang="ja">

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZKNTMF');</script>
<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="">
	<meta name="format-detection" content="telephone=no">

	<title><?php wp_title('&nbsp;|&nbsp;', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<?php /* CSS */ ?>
	<link rel="stylesheet" href="<?php _e_asset_url('css/waves.css'); ?>">
	<link rel="stylesheet" href="<?php _e_asset_url('css/bootstrap/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php _e_asset_url('css/common.css'); ?>">

	<link rel="shortcut icon" href="<?php _e_asset_url('img/favicon.ico'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZKNTMF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php /*
	<div class="p-fixed-button">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop/" target="_blank">コンサルティングお申込はこちら</a>
	</div>
*/ ?>

	<header class="l-header p-header">
		<<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div';
			echo $html_tag; ?> class="p-header__site-brand">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php _e_asset_url('img/logo_gold.svg'); ?>" alt="しろくま省エネセンター" width="144" height="40">
			</a>
		</<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div';
			echo $html_tag; ?>>

		<div class="p-menu">

			<nav class="p-gnav">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">選ばれる理由</a></li>
					<li class="js-has-child">
						<a href="javascript:void(0);">対応業務</a>
						<ul class="p-gnav__child">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_saving/" class="js-waves">省エネ計算届出</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>assessment/" class="js-waves">住宅性能評価</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_decision/" class="js-waves">省エネ適合性判定</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>casbee/" class="js-waves">CASBEE</a></li>
							<?php /* <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wooden_detached/" class="js-waves">木造戸建て</a></li> */ ?>

						</ul>
					</li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">よくある質問</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>voice/">お客様の声</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">コラム</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社概要</a></li>
				</ul>
			</nav>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-button p-button--yellow p-button--arrow">無料見積り依頼</a>

		</div>
		<div id="js-menu-button" class="p-menu-button">
			<a href="javascript:void(0)">
				<div class="p-hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div></div>
			</a>
		</div>

		<div class="p-sp-menu">
			<nav class="p-gnav">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">選ばれる理由</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">よくある質問</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>voice/">お客様の声</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">コラム</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社概要</a></li>
				</ul>
				<ul>
					<li>
						対応業務
						<ul class="p-gnav__child">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_saving/">省エネ計算届出</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>assessment/">住宅性能評価</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_decision/">省エネ適合性判定</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>casbee/">CASBEE</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wooden_detached/">木造戸建て</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">その他</a></li>
						</ul>
					</li>
				</ul>
			</nav>


			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-button p-button--yellow p-button--arrow">無料見積り依頼</a>

			<?php /*
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>shop/" class="p-button p-button--theme p-button--arrow" target="_blank">コンサルティングお申込はこちら</a>
			*/ ?>

			<picture class="">
				<img src="<?php _e_asset_url('img/img_mv_illust2_sp.png'); ?>" alt="しろくまアイランド" width="339" height="240">
			</picture>
		</div>
	</header>









