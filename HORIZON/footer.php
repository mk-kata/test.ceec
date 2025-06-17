<?php if(!is_page('contact') && !is_page('regist_magazine')): ?>

<?php if(!is_page('certification_consulting')) :?>
<div class="certificationcheck-box">
	<div class="contents-inner">
		<div class="title"><span>環境性能認証不動産<br class="sp">コンサルティング業務</span></div>
		<div class="content">
			<p>どの環境性能認証を取得すればよいのか分からない…<br>どの補助金を活用できるのか分からない…<br>そんな悩みにお応えします！</p><br>
			<div class="btn red">
				<a href="<?php get_url(); ?>/certification_consulting/" class="button waves-effect"><span>詳しくはこちらから</span></a>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="mailmagazine-box">
	<div class="contents-inner">
		<div class="title"><span><b>省エネ計算<br class="pc">お役立ち情報</b></span></div>
		<div class="content">
			<p>環境・省エネルギー計算センターでは、メルマガ限定のお得な各種キャンペーン情報や最新ニュース・コラム・セミナー情報などの省エネ関連お役立ち情報を定期的に配信します。</p>
			<div class="btn water">
				<a href="https://go.ceec.jp/regist_magazine/" class="button waves-effect"><span>メールマガジンの登録</span></a>
			</div>
		</div>
	</div>
</div>

<?php if(is_front_page() || is_home()): ?>
<div class="jproject-box">
	<div class="contents-inner">
		<div class="img"><a href="https://nippon-smes-project.com/" target="_blank" rel="noopener noreferrer" class="button waves-effect"><img src="<?php get_td(); ?>/images/jproject/footer_bnr.jpg" alt="無料見積もりお問い合わせ"></a></div>
		<p><a href="https://nippon-smes-project.com/" target="_blank" rel="noopener noreferrer">環境・省エネルギー計算センターは<br>
		「中小企業からニッポンを元気にプロジェクト」<br>に参画しています</a></p>
	</div>
</div>
<?php endif; ?>

<div class="contact-box">
	<div class="contents-inner">
		<div class="headline">見積り依頼、お問合わせなどお気軽にご相談ください！</div>
		<div class="list">
			<div class="tel">
				<div class="list-title">お電話でのお問合わせ</div>
				<div class="tel-number">
					<a href="tel:03-5944-8575">03-5944-8575</a>
					<span>受付時間　平日 9：00～18：00</span>
				</div>
			</div>
			<div class="mail">
				<div class="list-title">メールフォームでのお問合わせ</div>
				<div class="btn red">
					<a href="<?php get_url(); ?>/contact" class="button waves-effect"><span>無料見積り・問い合わせをする<br>（ 24時間受付 ）</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.contact-box -->
<?php endif; ?>

<div class="sp recruit_link"><a href="https://hikoma.jp/horizonxx" target="_blank" rel="noopener noreferrer"><img src="https://test.ceec.jp/wp-content/uploads/2023/12/img_bnr_recruit_01.jpg"></a></div>

<footer id="globalFooter">
<div class="contents-inner">

	<div class="top-layer">
		<div class="footer_left">
			<div class="logo"><img src="<?php get_td(); ?>/images/common/footer-logo.png" alt="環境・省エネルギー計算センター"></div>
			<div class="company">運営会社<br>
			株式会社HorizonXX（ホライズン）</div>
			<div class="recruit_link"><a href="https://hikoma.jp/horizonxx" target="_blank" rel="noopener noreferrer"><img src="https://test.ceec.jp/wp-content/uploads/2023/12/img_bnr_recruit_01.jpg"></a></div>
		</div>
		<!-- 2023.07.11　更新 start -->
		<nav class="footer_right footer-link">
			<div class="item footer-link_energy-saving">
				<div class="item-title"><a href="<?php get_url(); ?>/energy_saving">省エネ計算代行業務</a></div>
				<ul>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC02">省エネ計算に関してのよくある課題</a></li>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC04">選ばれるメリット（強み）</a></li>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC12">省エネ計算対象の建築物</a></li>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC07">料金例＆他社との比較</a></li>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC06">全体業務の流れ</a></li>
					<li><a href="<?php get_url(); ?>/energy_saving/#ANC08">省エネ計算でよくある質問</a></li>
				</ul>
			</div>
			<div class="item footer-link_service">
				<div class="item-title"><a href="<?php get_url(); ?>/service">対応可能業務</a></div>
				<ul>
					<li><a href="<?php get_url(); ?>/energy_saving">省エネ計算代行業務</a></li>
					<li><a href="<?php get_url(); ?>/service/energy_decision">省エネ適合性判定業務</a></li>
					<li><a href="<?php get_url(); ?>/service/assessment">住宅性能評価業務</a></li>
					<li><a href="<?php get_url(); ?>/service/casbee">CASBEE業務</a></li>
					<li><a href="<?php get_url(); ?>/service/environmental_planning">東京都建築物環境計画書代行業務</a></li>
					<li><a href="<?php get_url(); ?>/service/bels">BELS業務</a></li>
					<li><a href="<?php get_url(); ?>/service/casbee_certification">CASBEE不動産業務</a></li>
					<li><a href="<?php get_url(); ?>/service/certification_consulting">環境性能認証不動産コンサルティング業務</a></li>
					<!--<li><a href="<?php get_url(); ?>/supporting-group">設計事務所応援隊</a></li>-->
				</ul>
			</div>
			<!-- 2024.11.19 クライアントが業務対応しきれない状態のため、非表示
				<div class="item">
					<div class="item-title"><a href="<?php get_url(); ?>/service">設計事務所応援隊</a></div>
					<ul>
						<li><a href="<?php get_url(); ?>/supporting-group">設計事務所応援隊TOP</a></li>
						<li><a href="<?php get_url(); ?>/supporting-group/improve-profit">収益向上サポートメニュー</a></li>
						<li><a href="<?php get_url(); ?>/supporting-group/cost-reduction">費用削減サポートメニュー</a></li>
						<li><a href="<?php get_url(); ?>/supporting-group/real-estate">不動産ご紹介・設計事務所独立支援・設計士専用シェアオフィス</a></li>
						<li><a href="<?php get_url(); ?>/supporting-group/expert">専門家ご紹介</a></li>
						<li><a href="<?php get_url(); ?>/supporting-group/mergers-and-acquisitions">設計事務所購入・売却（M&A）・事業承継</a></li>
					</ul>
				</div>
				-->
			<div class="item footer-link_other">
				<ul>
					<li><a href="<?php get_url(); ?>/faq">よくある質問</a></li>
					<li><a href="<?php get_url(); ?>/result">実績一覧</a></li>
					<li><a href="<?php get_url(); ?>/voice">お客様の声</a></li>
					<li><a href="<?php get_url(); ?>/seminar">ニュース・セミナー情報</a></li>
					<li><a href="<?php get_url(); ?>/column">コラム</a></li>
					<li><a href="https://go.ceec.jp/regist_magazine/">メルマガ登録・解除</a></li>
				</ul>
				<ul class="mt40">
					<li><a href="<?php get_url(); ?>/certification_news">環境性能認証不動産ニュース</a></li>
					<li><a href="<?php get_url(); ?>/certification_list">環境性能認証不動産一覧</a></li>
				</ul>
				<ul class="mt40">
					<li><a href="<?php get_url(); ?>/company">会社概要</a></li>
					<li><a href="<?php get_url(); ?>/news">お知らせ</a></li>
					<li><a href="<?php get_url(); ?>/policy">免責事項・個人情報保護に関して</a></li>
					<li><a href="<?php get_url(); ?>/sitemap">サイトマップ</a></li>
				</ul>
			</div>
		</nav>
		<!-- 2023.07.11　更新 end -->
	</div>


</div>

<div class="copyright">&copy; 環境・省エネルギー計算センター. All Rights Reserved</div>
</footer>
<!-- /#globalFooter -->

<?php
	$jp_no = "";
	$sidebtn = "";
	if(is_page('energy_saving')) { $jp_no = "01"; $sidebtn = "sidebtn_service"; }
	if(is_page('energy_decision')) { $jp_no = "02"; $sidebtn = "sidebtn_service"; }
	if(is_page('assessment')) { $jp_no = "03"; $sidebtn = "sidebtn_service"; }
	if(is_page('casbee')) { $jp_no = "04"; $sidebtn = "sidebtn_service"; }
	if(is_page('environmental_planning')) { $jp_no = "05"; $sidebtn = "sidebtn_service"; }
	if(is_page('bels')) { $jp_no = "06"; $sidebtn = "sidebtn_service"; }
	if(is_page('casbee_certification')) { $jp_no = "07"; $sidebtn = "sidebtn_service"; }
	if(is_page('supporting-group')) { $jp_no = "01"; $sidebtn = "sidebtn_support"; }
	if(is_page('improve-profit')) { $jp_no = "02"; $sidebtn = "sidebtn_support"; }
	if(is_page('cost-reduction')) { $jp_no = "03"; $sidebtn = "sidebtn_support"; }
	if(is_page('real-estate')) { $jp_no = "04"; $sidebtn = "sidebtn_support"; }
	if(is_page('expert')) { $jp_no = "05"; $sidebtn = "sidebtn_support"; }
	if(is_page('mergers-and-acquisitions')) { $jp_no = "06"; $sidebtn = "sidebtn_support"; }
	if(!is_page('contact') && !is_page('regist_magazine')) {
?>

<?php if(is_front_page() || is_home()): ?>
	<div class="fix-contents">
		<div class="box box_jpside2 box_hide">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/jproject/btn_side2_top.png" alt="無料見積もりお問い合わせ"></div>
		</div>
		<!-- <div class="box box04 qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<p>質問に答えるだけ！</p>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04.png" alt="チャットから簡単見積もり"></div>
		</div> -->
		<!-- <div class="box box04_sp qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04_sp.png" alt="チャットから見積もり"></div>
		</div> -->
		<!--
		<div class="box box01">
		<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
		<p>ちょっとした疑問などでも<br>お気軽にご連絡ください</p>
		<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text01.png" alt="無料見積もりお問い合わせ"></div>
	</div>
	-->
	<div class="box box02">
	<a href="https://go.ceec.jp/regist_magazine/" class="button waves-effect"></a>
	<p>メルマガ限定キャンペーン<br>・省エネ計算お役立ち情報</p>
	<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text02.png" alt="メルマガ登録"></div>
	</div>
	</div>
<?php elseif( $sidebtn == "sidebtn_service" ): ?>
	<div class="fix-contents">
		<div class="box box_jpside2 box_hide">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/jproject/btn_side2_service<?php echo $jp_no; ?>.png" alt="無料見積もりお問い合わせ"></div>
		</div>
		<!-- <div class="box box04 qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<p>質問に答えるだけ！</p>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04.png" alt="チャットから簡単見積もり"></div>
		</div> -->
		<!-- <div class="box box04_sp qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04_sp.png" alt="チャットから見積もり"></div>
		</div> -->
		<!--
		<div class="box box01">
		<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
		<p>ちょっとした疑問などでも<br>お気軽にご連絡ください</p>
		<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text01.png" alt="無料見積もりお問い合わせ"></div>
	</div>
-->
<div class="box box02">
	<a href="https://go.ceec.jp/regist_magazine/" class="button waves-effect"></a>
	<p>メルマガ限定キャンペーン<br>・省エネ計算お役立ち情報</p>
	<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text02.png" alt="メルマガ登録"></div>
</div>
</div>
<?php elseif( $sidebtn == "sidebtn_support" ): ?>
	<div class="fix-contents">
		<div class="box box_jpside2 box_hide">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/jproject/btn_side2_support<?php echo $jp_no; ?>.png" alt="無料見積もりお問い合わせ"></div>
		</div>
		<!-- <div class="box box04 qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<p>質問に答えるだけ！</p>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04.png" alt="チャットから簡単見積もり"></div>
		</div> -->
		<!-- <div class="box box04_sp qualvaBtn">
			<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04_sp.png" alt="チャットから見積もり"></div>
		</div> -->
		<div class="box box02">
			<a href="https://go.ceec.jp/regist_magazine/" class="button waves-effect"></a>
			<p>メルマガ限定キャンペーン<br>・省エネ計算お役立ち情報</p>
			<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text02.png" alt="メルマガ登録"></div>
		</div>
	</div>
<?php else: ?>
	<div class="fix-contents">
	<!-- <div class="box box04 qualvaBtn">
		<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
		<p>質問に答えるだけ！</p>
		<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04.png" alt="チャットから簡単見積もり"></div>
	</div> -->
	<!-- <div class="box box04_sp qualvaBtn">
		<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
		<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text04_sp.png" alt="チャットから見積もり"></div>
	</div> -->
		<!--
		<div class="box box01">
		<a href="<?php get_url(); ?>/contact" class="button waves-effect"></a>
		<p>ちょっとした疑問などでも<br>お気軽にご連絡ください</p>
		<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text01.png" alt="無料見積もりお問い合わせ"></div>
	</div>
-->
<div class="box box02">
	<a href="https://go.ceec.jp/regist_magazine/" class="button waves-effect"></a>
	<p>メルマガ限定キャンペーン<br>・省エネ計算お役立ち情報</p>
	<div class="img"><img src="<?php get_td(); ?>/images/common/fix-menu-text02.png" alt="メルマガ登録"></div>
</div>
</div>
<?php endif; ?>

<?php
}
?>


<div class="to-top"><a href="#"><img src="<?php get_td(); ?>/images/common/btn-totop.png" alt="PAGE TOTOP"></a></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php get_td(); ?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php get_td(); ?>/js/waves.min.js"></script>
<script src="<?php get_td(); ?>/js/responsive.js"></script>
<script src="<?php get_td(); ?>/js/common.js"></script>
<script type='text/javascript'>
piAId = '986541';
piCId = '';
piHostname = 'go.ceec.jp';

(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + piHostname + '/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
<?php if(is_front_page()): ?>
<script src="<?php get_td(); ?>/js/top.js"></script>
<?php endif; ?>

<?php if(is_page('energy_saving') || is_page('service') || is_page('energy_decision') || is_page('casbee') || is_page('assessment') || is_page('bels') || is_page('improve-profit') || is_page('environmental_planning') || is_page('casbee_certification') || is_page('certification_consulting')): ?>
<script src="<?php get_td(); ?>/js/calc.js"></script>
<?php endif; ?>

<?php if(is_page("certification_check")): ?>
	<link rel="stylesheet" media="all" href="<?php get_td(); ?>/certification_check/certification_check.css">
	<script src="<?php get_td(); ?>/certification_check/certification_check.js"></script>
<?php endif; ?>

<!-- < ?php if(is_post_type_archive('certification_list')): ?>
<script src="< ?php get_td(); ?>/js/filter.js"></script>
< ?php endif; ?> -->

<?php if(is_page("contact")): ?>
	<script src="<?php get_td(); ?>/js/contact.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
