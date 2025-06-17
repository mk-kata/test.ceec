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
					<!-- .l-inner .p-single-content -->
				</div>
			</div>

		<?php else : ?>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner p-single-content">
						<ul class="p-anchor-link c-card mb-5">
							<li><a href="#s01">省エネ適合性判定とは？</a></li>
							<li><a href="#s02">適合義務の対象である特定建築行為</a></li>
							<li><a href="#s03">省エネ適合性判定業務の流れ</a></li>
						</ul>

						<h2 id="s01" class="c-heading c-heading--1">省エネ適合性判定とは？</h2>
						<p class="mb-5">非住宅部分の床面積が300㎡以上の場合に、建築主が特定建築の新築・増改築をするときは、建築物エネルギー消費性能確保計画（略称：省エネ計画）を作成のうえ、工事着手の前に登録省エネ判定機関または所管行政庁にて適合判定を受けることが義務付けられています。<br>省エネ適合性判定は、建築基準法に基づく建築確認及び完了検査の対象となり、省エネ基準に適合していなければ、確認済証や検査済証の交付を受けることができません。</p>


						<h3 class="c-heading c-heading--4">省エネ計算届出の対象</h3>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>


						<h4 class="c-h4">タイトルが入りますタイトルが入ります（h4）</h4>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<h5 class="c-h5">タイトルが入りますタイトルが入ります（h5）</h5>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<h6 class="c-h6">タイトルが入りますタイトルが入ります（h6）</h6>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<ul class="p-circle-list mb-5">
							<li class="p-circle-list__item p-circle-list__item--pink">CASBEE建築<br>（届出）</li>
							<li class="p-circle-list__item p-circle-list__item--green">CASBEE戸建て<br>（認証）</li>
							<li class="p-circle-list__item p-circle-list__item--blue">CASBEE戸建て<br>（届出）</li>
							<li class="p-circle-list__item p-circle-list__item--orange">CASBEE戸建て<br>（認証）</li>
							<li class="p-circle-list__item p-circle-list__item--purple">CASBEE不動産</li>
							<li class="p-circle-list__item p-circle-list__item--pink">CASBEE建築<br>（届出）</li>
						</ul>



						<ol class="p-flow mb-5">
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


						<div class="p-table-rounded mb-5">
							<table class="p-table">
								<tbody>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-5">
								<a href="#s01" class="p-button p-button--blue p-button--arrow p-button--mw-none">サイト内ページ遷移</a>
							</div>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-4">
								<a href="/contact/" class="p-button p-button--yellow p-button--arrow p-button--mw-none">お問い合わせ</a>
							</div>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-5">
								<a href="#s01" class="p-button p-button--white p-button--arrow p-button--mw-none">サイト内ページ遷移</a>
							</div>
						</div>


						<div class="c-card">
							<h3 class="c-heading c-heading--4">省エネ計算届出の対象</h3>
							<p><img class="rounded-3" src="<?php _e_asset_url('img/img_dummy.jpg'); ?>" alt=""></p>

							<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>
						</div>

					</div>
					<!-- .l-inner .p-single-content -->
				</div>
			</div>

			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<div class="l-inner p-single-content">


						<h2 id="s01" class="c-heading c-heading--1">省エネ適合性判定とは？</h2>
						<p class="mb-5">非住宅部分の床面積が300㎡以上の場合に、建築主が特定建築の新築・増改築をするときは、建築物エネルギー消費性能確保計画（略称：省エネ計画）を作成のうえ、工事着手の前に登録省エネ判定機関または所管行政庁にて適合判定を受けることが義務付けられています。<br>省エネ適合性判定は、建築基準法に基づく建築確認及び完了検査の対象となり、省エネ基準に適合していなければ、確認済証や検査済証の交付を受けることができません。</p>


						<h3 class="c-heading c-heading--4">省エネ計算届出の対象</h3>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>


						<h4 class="c-h4">タイトルが入りますタイトルが入ります（h4）</h4>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<h5 class="c-h5">タイトルが入りますタイトルが入ります（h5）</h5>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<h6 class="c-h6">タイトルが入りますタイトルが入ります（h6）</h6>
						<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>

						<ul class="p-circle-list mb-5">
							<li class="p-circle-list__item p-circle-list__item--pink">CASBEE建築<br>（届出）</li>
							<li class="p-circle-list__item p-circle-list__item--green">CASBEE戸建て<br>（認証）</li>
							<li class="p-circle-list__item p-circle-list__item--blue">CASBEE戸建て<br>（届出）</li>
							<li class="p-circle-list__item p-circle-list__item--orange">CASBEE戸建て<br>（認証）</li>
							<li class="p-circle-list__item p-circle-list__item--purple">CASBEE不動産</li>
							<li class="p-circle-list__item p-circle-list__item--pink">CASBEE建築<br>（届出）</li>
						</ul>



						<ol class="p-flow mb-5">
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


						<div class="p-table-rounded mb-5">
							<table class="p-table">
								<tbody>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
									<tr>
										<th>タイトル</th>
										<td>説明</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-5">
								<a href="#s01" class="p-button p-button--blue p-button--arrow p-button--mw-none">サイト内ページ遷移</a>
							</div>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-4">
								<a href="/contact/" class="p-button p-button--yellow p-button--arrow p-button--mw-none">お問い合わせ</a>
							</div>
						</div>

						<div class="row justify-content-center mb-5">
							<div class="col-lg-5">
								<a href="#s01" class="p-button p-button--white p-button--arrow p-button--mw-none">サイト内ページ遷移</a>
							</div>
						</div>


						<div class="c-card">
							<h3 class="c-heading c-heading--4">省エネ計算届出の対象</h3>
							<p><img class="rounded-3" src="<?php _e_asset_url('img/img_dummy.jpg'); ?>" alt=""></p>

							<p>外気に対して高い開放性を有する部分を除いた部分の床面積が 300 ㎡以上の住宅及び非住宅建築物の新築・増改築が省エネ法の届出の対象となります。<br>ただし、旧省エネ法（エネルギー使用の合理化等に関する法律）で対象とされていた修繕・模様替えや、空気調和設備等の設置・改修（用途変更に伴う設備改修も含む）は対象外となりました。</p>
						</div>

					</div>
					<!-- .l-inner .p-single-content -->
				</div>
			</div>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner">

						<?php get_template_part('part', 'cta'); ?>

					</div>
					<!-- .l-inner -->
				</div>
				<!-- .container -->
			</div>

		<?php endif;?>

	</section>
</main>

<?php get_footer(); ?>