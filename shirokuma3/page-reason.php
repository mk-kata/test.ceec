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
					<div class="l-inner">

						<?php the_content(); ?>

					</div>
				</div>
			</div>

		<?php else : ?>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner p-single-content">
						<ul class="p-anchor-link c-card mb-5">
							<li><a href="#s1">「しろくま省エネセンター」<br>名前の由来</a></li>
							<li><a href="#s2">選ばれる理由</a></li>
						</ul>

						<h2 id="s1" class="c-heading c-heading--1">「しろくま省エネセンター」<br>名前の由来</h2>

						<figure class="mb-3">
							<img class="rounded-3" src="<?php _e_asset_url('img/img_dummy.jpg'); ?>" alt="">
						</figure>
						<p>当センターでは、収益金の一部を環境保護団体に寄付しています。</p>
						<p>環境保護団体を通じて、全滅危惧種であるしろくまを中心として動物保護、ひいては地球温暖化対策の一助を担っております。</p>
						<p>現在、企業にはESG経営などが求められている中、当センターは省エネ計算を通じた具体的な地球温暖化対策への寄与、環境保護団体を通じた間接的な保護活動を行っているため、同じくらいの省エネ計算代行費用であれば、当センターにお任せ頂けませんか？</p>

						<!-- <a href="https://www.wwf.or.jp/" class="p-button p-button--blue p-button--arrow mx-auto mt-5" target="_blank">WWF とは</a> -->
					</div>
				</div>
			</div>

			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 id="s2" class="c-heading c-heading--1">しろくま省エネセンターが<br class="d-none d-lg-block">選ばれる理由</h2>

						<ul class="p-reason-list mb-5">
							<li class="p-reason-list__item p-reason-list__item--pink">
								<a href="#r1">安心の返金保証制度<span class="c-icon c-icon--arrow"></span>
								</a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--green">
								<a href="#r2">気楽に！<br>お試しで使える<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--blue">
								<a href="#r3">柔軟な対応と<br>コミュニケーション能力<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--orange">
								<a href="#r4">高品質・スピード納品<span class="c-icon c-icon--arrow"></span></a>
							</li>
							<li class="p-reason-list__item p-reason-list__item--purple">
								<a href="#r5">設計事務所の身近で<br>頼もしいパートナー<span class="c-icon c-icon--arrow"></span></a>
							</li>
						</ul>

						<div class="pt-5">
							<div id="r1" class="c-card mb-5">
								<h3 class="c-heading c-heading--4">安心の返金保証制度</h3>
								<p>初めて依頼するときは、「その会社がちゃんと対応してくれるか不安」「きちんと決済完了するまでサポートしてくれるか分からない」といったこともあるのではないでしょうか。<br>
								しろくま省エネセンターでは、安心してご利用していただくために、業界初「省エネ計算返金保証」を行っております。<br>おかげさまで多くのご依頼を頂いているため、毎月の対応件数は制限させていただいておりますので、お早めにご相談ください。</p>
							</div>

							<div id="r2" class="c-card mb-5">
								<h3 class="c-heading c-heading--4">気楽に、お試しで使える！</h3>
								<p>納品、質疑、決裁完了まで完全サポートさせて頂きますが、もし対応が不十分だったり、内容にご満足いただけなかった場合は返金させて頂きますので、気楽に、お試しで発注することが可能です。<br>万が一、返金となった場合でも、省エネ計算書類をお返しいただく必要はありませんので、リスクなく、お試しでご利用可能です。</p>
							</div>

							<div id="r3" class="c-card mb-5">
								<h3 class="c-heading c-heading--4">柔軟な対応とコミュニケーション能力</h3>
								<p>お客様と丁寧にコミュニケーションを取り、ご要望に柔軟に対応いたします。<br>「製本して納品してほしい」「専門用語がわからず、調べる時間ももったいないため、役所と直接質疑対応などをして欲しい」「役所に提出していく時間や提出の際に役所からの質問に対応できないため、提出や受取の代行もお願いしたい」など、些細なことでもお気軽にお申し付けください。</p>
							</div>

							<div id="r4" class="c-card mb-5">
								<h3 class="c-heading c-heading--4">高品質・スピード納品</h3>
								<p>役所審査を迅速にする、審査をしやすくするため、独自の省エネ計算用図面等を作成。一般財団法人建築環境・省エネルギー機構（IBEC）の省エネ資格保有者によるダブルチェック体制により高品質を担保。省エネ等級を満たすための変更提案の際には、コスト・性能を考慮した提案をさせて頂きます。<br>納期に関しては、通常1-2週間程度ですが、お急ぎの場合、翌日納品の実績もございます。また、役所との協議により、着工日ルールの整理も可能です。着工日が迫っている方はまずはご相談ください。</p>
							</div>

							<div id="r5" class="c-card">
								<h3 class="c-heading c-heading--4">設計事務所の身近で頼もしいパートナー</h3>
								<p>上場企業、大手設計事務所から個人設計事務所まで300社以上をサポートしており、累計1,000棟以上の省エネ計算実績がございます。<br>
								※現在は年間500棟程度をサポートさせていただいております。<br>
								全国の個人住宅、小規模事務所から大型工場・商業施設など幅広い物件用途に対応可能です。<br>
								複雑で煩わしい省エネ計算業務を気楽に発注できることで、省エネ計算から解放され、設計業務への集中できる環境をご提供。設計の生産性が最大限向上できるように身近なパートナーとしてご支援させていただきます。</p>
							</div>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-button p-button--yellow p-button--arrow mx-auto mt-5">お問い合わせ</a>


							<h2 class="c-heading c-heading--1 mt-5">ご相談はお早めにお問合せ下さい</h2>

							<p>建築物省エネ法の改正により 2021 年 4 月以降、小規模（延床面積 300 ㎡未満）の住宅は設計士から建築主への説明が義務化されます。<br>また、省エネ適判対象の拡大にともない 300 ㎡以上の非住宅建築物も省エネ適判の対象となり省エネ基準値適合が義務化されます。<br>今後、更に需要が増える省エネ計算。<br>計算代行会社も増えている中、どう選べば良いか分からない方に向けて業界初の「省エネ計算返金保証プラン」を提案させていただきます。<br>万が一ご納得いかなかった場合は返金させて頂きますのでご安心下さい。<br>気楽に悩まずご発注頂けます。<br>お陰様で多くのお問い合わせを頂いており、毎月の対応件数は限定させて頂いておりますので、ご相談などお早めにお問い合わせください</p>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-button p-button--yellow p-button--arrow mx-auto mt-5">お問い合わせ</a>

						</div>


					</div>
				</div>
			</div>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner">
						<?php get_template_part('part', 'cta'); ?>
					</div>
				</div>
			</div>

<?php /*
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