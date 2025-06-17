<?php get_header(); ?>

<main class="p-main">
	<section class="p-mainvisual">
		<picture class="p-mainvisual__image">
			<source media="(max-width: 992px)" srcset="<?php _e_asset_url('img/img_mv_illust_sp.png'); ?>" />
			<img src="<?php _e_asset_url('img/img_mv_illust.png'); ?>" alt="しろくまアイランド" width="939" height="806">
		</picture>

		<div class="p-mainvisual__content">
			<div class="p-content">
				<div class="p-text">
					<h2 class="p-text__h2"><span>返金保証</span>制度</h2>
					<h3 class="p-text__h3">決済まで完全サポート<br>できなければ返金致します！</h3>
					<p><span>業界初「省エネ計算返金保証」</span>を行っております。<br>お陰様で多くのご依頼を頂いているため、<br>毎月の対応件数は制限させていただいておりますので、<br>お早めにご相談ください。</p>
				</div>
				<div class="p-balloon">
					<p>面倒で複雑な<span>省エネ計算</span>を気楽に！
						<small>個人住宅、小規模事務所から大型工場など対応可能</small></p>
				</div>
			</div>

			<div class="p-logo">
				<p><img src="<?php _e_asset_url('img/logo_white.svg'); ?>" alt="しろくま省エネセンター" width="416" height="115">
				<span>建築物省エネ計算代行業務</span></p>
			</div>
		</div>

	</section>

	<section id="about" class="p-section p-section--about">
		<div class="container">
			<h2 class="c-heading c-heading--1">
				省エネ計算<span>で</span><br>こんな不安・経験はありませんか？
			</h2>

			<div class="p-case">
				<ul>
					<li class="p-case__1">初めて依頼するので<br>その会社の対応がちゃんとしているか<br>わからず不安...</li>
					<li class="p-case__2">依頼後、対応が悪かったため、<br>業務をキャンセルして他の会社に<br>変えたいことがあった。</li>
					<li class="p-case__3">きちんと決裁完了するまで<br>サポートしてくれるのか<br>わからない。</li>
					<li class="p-case__4">前に依頼した会社に<br>途中で連絡が<br>とれなくなってしまった。</li>
					<li class="p-case__5">役所質疑の内容をみても理解できなかったため、<br>省エネ計算会社に直接役所担当者と<br>やり取りして欲しかったが、やってもらえなかった。</li>
				</ul>
			</div>

			<p>省エネ計算は、建築物のエネルギー消費性能の向上に関する法律（建築物省エネ法）<br class="d-none d-lg-block">によって、申請もしくは届出が義務付けられています。<br>
			建築物の外皮性能やエネルギー消費量、さらには<br class="d-none d-lg-block">太陽光発電の有無についても総合的判断する必要があり、<br class="d-none d-lg-block">専門的な知見が要求されるため、省エネ計算の代行会社に委託するのが効率的です。</p>

			<div class="c-card p-about-service">
				<h3 class="c-heading c-heading--2">代行業務の内容</h3>
				<ul>
					<li><span>省エネ計算</span></li>
					<li><span>提出代行（別途費用オプション）</span></li>
					<li>
						<span>計画書または届出書作成</span>
						<small>省エネ計算及び計算結果書類・根拠図面を作成の上、<br>計画書または届出書を作成し、<br>製本またはPDFデータで納品いたします。</small>
					</li>
					<li><span>完了検査時の軽微変更申請（適宜）</span></li>
				</ul>
			</div>
		</div>

		<div class="container px-4 my-5">
			<div class="l-inner">

				<?php get_template_part('part', 'cta'); ?>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="service" class="p-section p-section--service  p-section--ice-bg">
		<div class="container">
			<div class="p-service row justify-content-center">
				<div class="col-2 col-sm-2 col-xl-1">
					<header class="p-vertical-header">
						<h2 class="p-title p-title--vertical">対応業務</h2>
					</header>
				</div>
				<div class="col-9 col-sm-7 col-lg-10 col-xl-8">
					<div class="p-content">
						<ul class="p-tag-ribbon">
							<li class="p-tag-ribbon__item p-tag-ribbon__item--pink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_saving/">省エネ計算届出</a></li>
							<li class="p-tag-ribbon__item p-tag-ribbon__item--khaki"><a href="<?php echo esc_url( home_url( '/' ) ); ?>assessment/">住宅性能評価</a></li>
							<li class="p-tag-ribbon__item p-tag-ribbon__item--green"><a href="<?php echo esc_url( home_url( '/' ) ); ?>casbee/">CASBEE</a></li>
							<li class="p-tag-ribbon__item p-tag-ribbon__item--purple"><a href="<?php echo esc_url( home_url( '/' ) ); ?>energy_decision/">省エネ適合性判定</a></li>
						</ul>

						<ul class="p-content__other">
							<li>木造戸建て</li>
							<li>フラット35・35S</li>
							<li>長期優良住宅</li>
							<li>東京都環境計画書</li>
							<li>BELS</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /.p-service -->

			<div class="p-area row justify-content-center">
				<div class="col-10 col-lg-9 p-content">
					<picture>
						<img src="<?php _e_asset_url('img/img_home_service_area.png'); ?>" alt="全国対応いたします！" width="640" height="552">
					</picture>
					<div>
						<ul>
							<li>北海道</li>
							<li>青森県</li>
							<li>岩手県</li>
							<li>宮城県</li>
							<li>秋田県</li>
						</ul>
						<ul>
							<li>山形県</li>
							<li>福島県</li>
							<li>茨城県</li>
							<li>栃木県</li>
							<li>群馬県</li>
						</ul>
						<ul>
							<li>埼玉県</li>
							<li>千葉県</li>
							<li>東京都</li>
							<li>神奈川県</li>
							<li>新潟県</li>
						</ul>
						<ul>
							<li>富山県</li>
							<li>石川県</li>
							<li>福井県</li>
							<li>山梨県</li>
							<li>長野県</li>
						</ul>
						<ul>
							<li>岐阜県</li>
							<li>静岡県</li>
							<li>愛知県</li>
							<li>三重県</li>
							<li>滋賀県</li>
						</ul>
						<ul>
							<li>京都府</li>
							<li>大阪府</li>
							<li>兵庫県</li>
							<li>奈良県</li>
							<li>和歌山県</li>
						</ul>
						<ul>
							<li>鳥取県</li>
							<li>島根県</li>
							<li>岡山県</li>
							<li>広島県</li>
							<li>山口県</li>
						</ul>
						<ul>
							<li>徳島県</li>
							<li>香川県</li>
							<li>愛媛県</li>
							<li>高知県</li>
							<li>福岡県</li>
						</ul>
						<ul>
							<li>佐賀県</li>
							<li>長崎県</li>
							<li>熊本県</li>
							<li>大分県</li>
							<li>宮崎県</li>
						</ul>
						<ul>
							<li>鹿児島県</li>
							<li>沖縄県</li>
						</ul>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-xl-1">
					<header class="p-vertical-header">
						<h2 class="p-title p-title--vertical">対応エリア</h2>
					</header>
				</div>
			</div>
			<!-- /.p-area -->

			<div class="p-reason row justify-content-center">
				<div class="col-2 col-sm-2 col-xl-1">
					<header class="p-vertical-header">
						<h2 class="p-title p-title--vertical">選ばれる理由</h2>
					</header>
				</div>
				<div class="col-9 col-sm-6 col-lg-10 col-xl-8">
					<div class="p-content">
						<ul class="p-reason-list">
							<li class="p-reason-list__item p-reason-list__item--pink">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/#r1">安心の返金保証制度<span class="c-icon c-icon--arrow"></span>
								</a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--green">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/#r2">気楽に！<br>お試しで使える<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--blue">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/#r3">柔軟な対応と<br>コミュニケーション能力<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--orange">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/#r4">高品質・スピード納品<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--purple">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/#r5">設計事務所の身近で<br>頼もしいパートナー<span class="c-icon c-icon--arrow"></span></a>
							</li>
						</ul>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/" class="p-button p-button--blue p-button--arrow">選ばれる理由</a>
					</div>
				</div>
			</div>
			<!-- /.p-reason -->

		</div>

		<div class="container px-4 my-5">
			<div class="l-inner">

				<?php get_template_part('part', 'cta'); ?>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->

	</section>

	<section id="flow" class="p-section p-section--flow p-section--ocean-bg">
		<div class="container px-4">
			<h2 class="c-heading c-heading--3">ご依頼から<br>納品までの流れ</h2>

			<ol class="p-flow">
				<li class="p-flow__item">
					<figure>
						<img src="<?php _e_asset_url('img/img_home_flow1.png'); ?>" alt="お見積り" width="248" height="260">
					</figure>
					<div class="p-content">
						<h3 class="p-title">お見積り</h3>
						<p>お問い合わせフォームに必要事項を入力のうえ、送信ボタンをクリックしてください。<br>
						自動返信メールが届けますので、以下の見積り時必要資料を添付してお送りください。<br><br>
						①平面図　②立面図　③断面図　④建築概要（建築地、延床面積など、建物の概要が分かる図面）<br>（現状、揃っている図面で大丈夫です）<br><br>1営業日以内にお見積書を送付させていただきます。</p>
					</div>
				</li>

				<li class="p-flow__item">
					<figure>
						<img src="<?php _e_asset_url('img/img_home_flow2.png'); ?>" alt="ご発注" width="248" height="260">
					</figure>
					<div class="p-content">
						<h3 class="p-title">ご発注</h3>
						<p>ご発注の場合は、その旨メールかお電話にてお知らせ下さい。<br>納期や金額、サービス面での対応にご要望がある場合はお気軽にご相談ください。<br><br>その後、見積り時に送付します省エネ計算必要書類リストを確認して、必要書類のご送付をお願いします。</p>
					</div>
				</li>

				<li class="p-flow__item">
					<figure>
						<img src="<?php _e_asset_url('img/img_home_flow3.png'); ?>" alt="作業開始" width="248" height="260">
					</figure>
					<div class="p-content">
						<h3 class="p-title">作業開始</h3>
						<p>不足資料を確認し、作業をスタートさせていただきます。<br>作業納期はおおよそ1～2週間程度いただいておりますが、お急ぎの方はお見積り時にご相談下さい。<br>ご依頼内容によりますが、目標値やご希望の取得項目などの詳細についてもお打ち合わせさせていただきます。<br>また、押印が必要な書類は先行してお送りいたしますので、省エネ計算後、スムーズに提出が可能です。</p>
					</div>
				</li>

				<li class="p-flow__item">
					<figure>
						<img src="<?php _e_asset_url('img/img_home_flow4.png'); ?>" alt="納品" width="248" height="260">
					</figure>
					<div class="p-content">
						<h3 class="p-title">納品</h3>
						<p>計算が終了しましたら、PDFデータと請求書を送付させていただきます。<br>ご希望の方には製本ファイルでの納品も可能です。<br>基準値に満たない場合、検討案の提案もさせていただきます。<br><br>
						※省エネ届出は工事着工の21日前までとなりますので、ご注意下さい。</p>
					</div>
				</li>

				<li class="p-flow__item">
					<figure>
						<img src="<?php _e_asset_url('img/img_home_flow5.png'); ?>" alt="アフターフォロー" width="248" height="260">
					</figure>
					<div class="p-content">
						<h3 class="p-title">アフターフォロー</h3>
						<p>書類ご提出後、役所や民間検査機関より質疑等のご連絡が入りましたら、責任を持って対応させていただきます。<br>質疑書が送られてきましたら、そのまま弊社までお送り下さい。<br>質疑対応、決裁完了まで責任をもって対応させて頂きます。</p>
					</div>
				</li>


			</ol>
		</div>

		<div class="container px-4 my-5">
			<div class="l-inner">

				<?php get_template_part('part', 'cta'); ?>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="voice" class="p-section p-section--voice p-section--ice-bg">
		<div class="container px-4">
			<div class="l-inner">
				<header class="p-vertical-header">
					<h2 class="p-title p-title--vertical">お客様の声</h2>
				</header>

				<div class="row g-4">
				<?php
				$args = array(
					'post_type' => 'voice',
					'numberposts' => 2,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) {

					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>

							<?php get_template_part('loop', 'voice'); ?>

						<?php
					endforeach;

				} else {
					echo '<p>記事が見つかりませんでした</p>';
				}
				wp_reset_postdata();
				?>
				</div>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>voice/" class="p-button p-button--blue p-button--arrow">お客様の声</a>
			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="result" class="p-section p-section--result p-section--ocean-bg">
		<div class="container px-4">
			<div class="l-inner">
				<header class="p-vertical-header">
					<h2 class="p-title p-title--vertical">安心の対応実績</h2>
				</header>
				<?php
				$args = array(
					'post_type' => 'result',
					'numberposts' => 8,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) {
					echo '<div class="c-card-list">';
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>

							<?php get_template_part('loop', 'result'); ?>

						<?php
					endforeach;
					echo '</div>';
				} else {
					echo '<p>記事が見つかりませんでした</p>';
				}
				wp_reset_postdata();
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>result/" class="p-button p-button--blue p-button--arrow">安心の対応実績</a>
			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="column" class="p-section p-section--column p-section--ice-bg">
		<div class="container px-4">
			<div class="l-inner">
				<header class="p-vertical-header">
					<h2 class="p-title p-title--vertical">コラム</h2>
				</header>
				<div class="p-tab-panel">
					<div class="p-category-nav-wrap p-tab-panel__tab">
						<ul class="p-category-nav">
							<li class="is-active js-tab"><a href="javascript:void(0);">すべて</a></li>
							<?php
							$taxonomy = 'column_cat';
							$args = array(
								'hide_empty' => false,
								'parent' => 0
							);
							$terms = get_terms($taxonomy, $args);
							foreach ($terms as $term):
								?>
								<li class="js-tab"><a href="javascript:void(0);"><?php echo $term->name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="c-card-list p-tab-panel__item js-panel is-active">
						<?php
						$args = array(
							'post_type' => 'column',
							'numberposts' => 2,
						);
						$my_posts = get_posts( $args );
						if ( $my_posts ) {
							foreach ( $my_posts as $post ) :
								setup_postdata( $post );
								?>

									<?php get_template_part('loop', 'column-row'); ?>

								<?php
							endforeach;
						} else {
							echo '<p>記事が見つかりませんでした</p>';
						}
						wp_reset_postdata();
						?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>column/" class="p-button p-button--blue p-button--arrow">コラム</a>
					</div>

					<?php
					$taxonomy = 'column_cat';
					$args = array(
						'hide_empty' => false,
						'parent' => 0
					);
					$terms = get_terms($taxonomy, $args);
					foreach ($terms as $term):
						?>
						<div class="c-card-list p-tab-panel__item js-panel">
							<?php
							$args = array(
								'post_type' => 'column',
								'column_cat' => $term->slug,
								'numberposts' => 2,
							);
							$my_posts = get_posts( $args );
							if ( $my_posts ) {
								foreach ( $my_posts as $post ) :
									setup_postdata( $post );
									?>

										<?php get_template_part('loop', 'column-row'); ?>

									<?php
								endforeach;
							} else {
								echo '<p>記事が見つかりませんでした</p>';
							}
							wp_reset_postdata();
							?>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>column/column_cat/<?php echo $term->slug; ?>" class="p-button p-button--blue p-button--arrow">コラム</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="faq" class="p-section p-section--faq p-section--ocean-bg">
		<div class="container px-4">
			<div class="l-inner">
				<header class="p-vertical-header">
					<h2 class="p-title p-title--vertical">よくある質問</h2>
				</header>

				<?php
				$args = array(
					'post_type' => 'faq',
					'numberposts' => 3,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) {
					echo '<div class="p-faq-list" itemscope itemtype="https://schema.org/FAQPage">';
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>

							<?php get_template_part('loop', 'faq'); ?>

						<?php
					endforeach;
					echo '</div>';
				} else {
					echo '<p>記事が見つかりませんでした</p>';
				}
				wp_reset_postdata();
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/" class="p-button p-button--blue p-button--arrow">よくある質問</a>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="news" class="p-section p-section--news p-section--ice-bg">
		<div class="container px-4">
			<div class="l-inner">
				<header class="p-vertical-header">
					<h2 class="p-title p-title--vertical">お知らせ</h2>
				</header>

				<?php
				$args = array(
					'post_type' => 'news',
					'numberposts' => 5,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) {
					echo '<ul class="p-news-list">';
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>

							<?php get_template_part('loop', 'news'); ?>

						<?php
					endforeach;
					echo '</ul>';
				} else {
					echo '<p>記事が見つかりませんでした</p>';
				}
				wp_reset_postdata();
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="p-button p-button--blue p-button--arrow">お知らせ</a>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>

	<section id="cta" class="p-section p-section--cta p-section--ocean-bg">
		<div class="container px-4">
			<div class="l-inner">

				<?php get_template_part('part', 'cta'); ?>

			</div>
            <!-- .l-inner -->
		</div>
        <!-- .container -->
	</section>
</main>

<?php get_footer(); ?>