<?php
get_header();
the_post();
?>

<main  class="p-main">
	<div class="p-page-header">
		<div class="container">
			<h1 class="p-page-header__title"><?php the_title(); ?></h1>
		</div>
	</div>

	<section class="p-page-content">
		<span class="p-page-content__illust"></span>

		<div class="p-breadcrumb container px-4">
			<div class="l-inner">
				<?php get_template_part('part', 'breadcrumb'); ?>
			</div>
		</div>

		<?php if(!empty($post->post_content)):?>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner p-single-content">

						<?php the_content(); ?>

					</div>
				</div>
			</div>

		<?php else : ?>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner p-single-content">
						<ul class="p-anchor-link c-card mb-5">
							<li><a href="#s1">省エネ計算届出とは？</a></li>
							<li><a href="#s2">省エネ計算届出の手続きの流れ</a></li>
						</ul>

						<h2 id="s1" class="c-heading c-heading--1">省エネ計算届出とは？</h2>
						<p>住宅で300㎡以上の建築行為をしようとする際には、工事に着手する21日前までに、省エネ計画に係る計算結果等を所管行政庁または登録省エネ判定機関に届け出る義務があります。<br>提出を忘れてしまうと法律違反となるため注意が必要です。</p>

						<h3 class="c-heading c-heading--4">省エネ計算届出の対象</h3>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<h3 class="c-heading c-heading--4">省エネ計算の届け先</h3>
						<p>省エネ計算の届出先は、申請対象となる物件の建設地を管轄する所管行政庁、もしくは業務範囲としている登録省エネ判定機関です。<br>申請対象となる物件の建設地の届出先は、住宅性能評価・表示協会で調べることができます。</p>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-button p-button--yellow p-button--arrow mx-auto my-5">お問い合わせ</a>

						<h2 id="s2" class="c-heading c-heading--1">省エネ計算届出の<br class="d-none d-lg-block">手続きの流れ</h2>
						<figure>
							<img src="<?php _e_asset_url('img/img_energy_saving.png'); ?>" alt="省エネ計算届出の手続きの流れ">
						</figure>

						<div class="mt-5"><?php get_template_part('part', 'cta'); ?></div>
					</div>
				</div>
			</div>

<?php /*
			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 class="c-heading c-heading--1">選ばれる理由</h2>

						<ul class="p-reason-list">
							<li class="p-reason-list__item p-reason-list__item--pink">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">省エネ計算が<br>選定しやすくなる<span class="c-icon c-icon--arrow"></span>
								</a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--green">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">気楽に！<br>お試しで使える<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--blue">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">返金保証！！<br>丁寧な<br>コミュニケーション、<br>クオリティに自信<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--orange">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">スピード納品<br>役所提出代行など<br>お客様の要望に<br>最大限お応え！！<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--purple">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/">設計事務所の身近で<br>頼もしいパートナー<span class="c-icon c-icon--arrow"></span></a>
							</li>
						</ul>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>reason/" class="p-button p-button--blue p-button--arrow mx-auto mt-5">選ばれる理由</a>
					</div>
				</div>
			</div>

			<div class="p-section p-section--ocean-bg">
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
								<p>ご発注の場合は、その旨メールかお電話にてお知らせ下さい。<br>納期や金額、サービス面での対応にご要望がある場合はお気軽にご相談ください。<br><br>その後、見積り時に送付します省エネ計算必要書類リストを確認して図面のご送付をお願いします。</p>
							</div>
						</li>

						<li class="p-flow__item">
							<figure>
								<img src="<?php _e_asset_url('img/img_home_flow3.png'); ?>" alt="作業開始" width="248" height="260">
							</figure>
							<div class="p-content">
								<h3 class="p-title">作業開始</h3>
								<p>不足資料を確認し、作業をスタートさせていただきます。<br>作業納期はおおよそ1～2週間程度いただいておりますが、お急ぎの方などはお見積り時にご相談下さい。<br>ご依頼内容によりますが、目標値やご希望の取得項目などの詳細についてもお打ち合わせさせていただきます。<br>また、押印が必要な書類は先行してお送りいたしますので、省エネ計算後、スムーズに提出が可能です。</p>
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
			</div>

			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<div class="l-inner">

						<?php get_template_part('part', 'industry_news'); ?>

					</div>
					<!-- .l-inner -->
				</div>
				<!-- .container -->
			</div>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 class="c-heading c-heading--1">よくある質問</h2>

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
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/" class="p-button p-button--blue p-button--arrow mx-auto mt-5">よくある質問</a>

					</div>
					<!-- .l-inner -->
				</div>
				<!-- .container -->
			</div>

			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 class="c-heading c-heading--1">お客様の声</h2>

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

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>voice/" class="p-button p-button--blue p-button--arrow mx-auto mt-5">お客様の声</a>

					</div>
					<!-- .l-inner -->
				</div>
				<!-- .container -->
			</div>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 class="c-heading c-heading--1">安心の対応実績</h2>

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

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>result/" class="p-button p-button--blue p-button--arrow mx-auto my-5">安心の対応実績</a>


						<?php get_template_part('part', 'cta'); ?>



					</div>
					<!-- .l-inner -->
				</div>
				<!-- .container -->
			</div>
 */ ?>
		<?php endif;?>

	</section>
</main>

<?php get_footer(); ?>