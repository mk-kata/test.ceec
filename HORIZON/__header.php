<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no">
	<title></title>
	<link rel="stylesheet" media="all" href="<?php get_td(); ?>/css/style.css" />
	<link rel="stylesheet" media="all" href="<?php get_td(); ?>/css/waves.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



	<header id="globalHeader">
		<div class="top-layer">
			<div class="logo"><a href="<?php get_url(); ?>"><img src="<?php get_td(); ?>/images/common/header-logo.png" alt="環境・省エネルギー計算センター"></a></div>
			<div class="utility-link">
				<ul>
					<li><a href="<?php get_url(); ?>/company">会社概要</a></li>
					<?php if(is_page('company')): ?>
						<li><a href="#ANC03" class="anchor-link">アクセス</a></li>
					<?php else: ?>
						<li><a href="<?php get_url(); ?>/company#ANC03-1">アクセス</a></li>
					<?php endif; ?>
				</ul>
				<div class="tel">
					<a href="tel:03-5944-8575">03-5944-8575</a>
				</div>
				<div class="btn red">
					<a href="<?php get_url(); ?>/contact" class="button waves-effect"><span>見積もり・お問い合わせ</span></a>
				</div>
			</div>
			<div class="sp sp-menu"><a href="#"><span></span><span></span><span></span></a></div>
		</div>
		<nav class="global-navi">
			<ul>
				<li<?php if(is_page('calc')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/calc" class="button waves-effect"><span>省エネ計算代行業務</span></a></li>
				<li<?php if(is_page('service')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/service" class="button waves-effect"><span>サービス一覧</span></a></li>
				<li<?php if(is_page('first')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/first" class="button waves-effect"><span>初めての方へ</span></a></li>
				<li<?php if(is_page('faq')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/faq" class="button waves-effect"><span>よくある質問</span></a></li>
				<li<?php if(is_page('case')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/case" class="button waves-effect"><span>実績一覧</span></a></li>
				<li<?php if(is_page('voice')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/voice" class="button waves-effect"><span>お客様の声</span></a></li>
				<li<?php if(is_page('news')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/news" class="button waves-effect"><span>お知らせ</span></a></li>
				<li<?php if(is_page('blog')) echo ' class="current"'; ?>><a href="<?php get_url(); ?>/blog" class="button waves-effect"><span>ブログ</span></a></li>
			</ul>
		</nav>
	</header>
	<!-- /#globalHeader -->