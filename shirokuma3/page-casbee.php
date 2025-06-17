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
							<li><a href="#s1">CASBEEとは？</a></li>
						</ul>

						<h2 id="s1" class="c-heading c-heading--1">CASBEEとは？</h2>
						<p>CASBEEとは、建築物を環境性能で評価し格付けする総合的な評価システムのことです。<br>
						2001年4月に国土交通省の支援のもと産官学共同プロジェクトとして開発されました。<br>建物の環境性能をBEE（建築物の環境効率）と呼ぶ指標で評価します。</p>
						<div class="c-card">
							<h3 class="c-heading c-heading--2">CASBEEの届出を忘れると<br>届出義務違反です。</h3>

							<div class="row align-items-center">
								<div class="col-lg-8 mb-3 mb-lg-0">
									<p>CASBEEの届け出を忘れていませんか？<br>工事着工の21日前（役所によっては確認申請の21日前）までにCASBEE届出書を役所などに提出する義務があり、提出していない場合は届出義務違反になります。</p>
									<p>特に、不動産の法律チェックにおいて（融資の際にも）現時点ではCASBEEの届出まで厳格に確認されるケースはあまりありませんが、投資用不動産に対する昨今の融資引き締めなどにより、遵法性の観点から、今後はCASBEEにおける義務違反物件に関して融資見送り･･･といった対応もあり得る可能性が出てきます。</p>
									<p>2000㎡を超える物件については、役所によっては届出義務があり、届出期限の遅れにより届出義務違反になってしまうのはもったいないため届出期限はこれまで以上に注視するようにしてください。<br>＊2000㎡を超えている物件で、届出が必要になる役所かどうかは、以下の役所一覧をご確認ください。</p>
								</div>
								<div class="col-lg-4">
									<img class="rounded-4" src="<?php _e_asset_url('img/img_energy_decision_shirokuma.jpg'); ?>" alt="CASBEEの届出を忘れると届出義務違反です。" width="250" height="294">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="p-section p-section--ice-bg">
				<div class="container px-4">
					<h2 class="c-heading c-heading--1">CASBEEの種類</h2>
					<ul class="p-circle-list">
						<li class="p-circle-list__item p-circle-list__item--pink">CASBEE建築<br>（届出）</li>
						<li class="p-circle-list__item p-circle-list__item--green">CASBEE戸建て<br>（認証）</li>
						<li class="p-circle-list__item p-circle-list__item--blue">CASBEE戸建て<br>（届出）</li>
						<li class="p-circle-list__item p-circle-list__item--orange">CASBEE戸建て<br>（認証）</li>
						<li class="p-circle-list__item p-circle-list__item--purple">CASBEE不動産</li>
					</ul>
				</div>
				<!-- /.container -->
			</div>

			<div class="p-section p-section--ocean-bg">
				<div class="container px-4">
					<div class="l-inner">
						<h2 class="c-heading c-heading--1">地方自治体で実施している<br class="d-none d-md-block">自治体版CASBEEの<br class="d-none d-md-block">連絡先と届出期日</h2>
						<p>2023年現在、24の自治体で届出が義務付けられています。<br>また、東京都で2000㎡以上の建築物を新築（増改築）する場合は、「東京都建築物環境計画書」の提出が義務付けられています。</p>
						<div class="p-table-rounded">
							<table class="p-table p-table--casbee">
								<thead>
									<tr>
										<th>No.</th>
										<th>自治体名</th>
										<th>施行日</th>
										<th>連絡先</th>
										<th>届出期日</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>名古屋市</td>
										<td>Apr-04</td>
										<td><a href="http://www.city.nagoya.jp/jigyou/category/39-6-3-10-5-0-0-0-0-0.html" target="_blank">住宅都市局建築指導部建築指導課建築物環境指導係 （建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>2</td>
										<td>大阪市</td>
										<td>Oct-04</td>
										<td><a href="http://www.city.osaka.lg.jp/sangyo/category/3036-2-6-0-0-0-0-0-0-0.html" target="_blank">都市計画局建築指導部建築確認課 （CASBEE大阪みらいのページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>3</td>
										<td>横浜市</td>
										<td>Jul-05</td>
										<td><a href="https://www.city.yokohama.lg.jp/business/bunyabetsu/kenchiku/kankyo-shoene/casbee/casbee.html" target="_blank">建築局建築指導部建築企画課（横浜市建築物環境配慮制度 おしらせのページ）</a></td>
										<td>確認申請予定日の21日前まで</td>
									</tr>
									<tr>
										<td>4</td>
										<td>京都市</td>
										<td>Oct-05</td>
										<td><a href="http://www.city.kyoto.lg.jp/tokei/page/0000152813.html" target="_blank">都市計画局建築指導部建築審査課 （CASBEE京都のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>5</td>
										<td>京都府</td>
										<td>Apr-06</td>
										<td><a href="http://www.pref.kyoto.jp/tikyu/building/main.html" target="_blank">地球温暖化対策課 （特定建築物排出量削減計画・報告・公表制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>6</td>
										<td>大阪府</td>
										<td>Apr-06</td>
										<td><a href="http://www.pref.osaka.jp/kenshi_shinsa/casbee_index_html/index.html" target="_blank">住宅まちづくり部建築指導室審査指導課建築環境・設備グループ （建築物の環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>7</td>
										<td>神戸市</td>
										<td>Aug-06</td>
										<td><a href="http://www.city.kobe.lg.jp/business/regulation/urban/building/procedure/otherreport/casbee/index.html" target="_blank">住宅都市局建築指導部建築安全課 （CASBEE神戸のページ）</a></td>
										<td>集合住宅：確認申請予定日の21日前まで<br>集合住宅以外：工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>8</td>
										<td>川崎市</td>
										<td>Oct-06</td>
										<td><a href="http://www.city.kawasaki.jp/jigyou/category/76-6-2-0-0-0-0-0-0-0.html" target="_blank">まちづくり局指導部建築指導課 （川崎市建築物環境配慮制度（キャスビー川崎）のページ）</a></td>
										<td>確認申請予定日の21日前まで</td>
									</tr>
									<tr>
										<td>9</td>
										<td>兵庫県</td>
										<td>Oct-06</td>
										<td><a href="http://web.pref.hyogo.jp/wd30/wd30_000000015.html" target="_blank">県土整備部住宅建築局建築指導課 （兵庫県建築物環境性能評価制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>10</td>
										<td>静岡県</td>
										<td>Jul-07</td>
										<td><a href="https://www.pref.shizuoka.jp/kurashikankyo/kenchiku/taishinka/1002526/index.html" target="_blank">くらし・環境部建築住宅局建築安全推進課建築確認検査室（CASBEE静岡のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>11</td>
										<td>福岡市</td>
										<td>Oct-07</td>
										<td><a href="http://www.city.fukuoka.lg.jp/jutaku-toshi/shinsa/life/kentikubutu-kankyouhairyo/top-page.html" target="_blank">住宅都市局建築指導部建築審査課 （福岡市建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>12</td>
										<td>札幌市</td>
										<td>Nov-07</td>
										<td><a href="http://www.city.sapporo.jp/kankyo/casbee/" target="_blank">環境局環境都市推進部エコエネルギー推進課 （札幌市建築物環境配慮制度（CASBEE札幌）のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>13</td>
										<td>北九州市</td>
										<td>Nov-07</td>
										<td><a href="http://www.city.kitakyushu.lg.jp/business/menu03_0146.html" target="_blank">建築都市局指導部建築指導課 （北九州市建築物総合環境性能評価制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>14</td>
										<td>さいたま市</td>
										<td>Apr-09</td>
										<td><a href="http://www.city.saitama.jp/005/001/010/p007819.html" target="_blank">建設局建築部建築総務課 （建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>15</td>
										<td>埼玉県</td>
										<td>Oct-09</td>
										<td><a href="https://www.pref.saitama.lg.jp/a1106/kenntikuhudousann/sonotakenntikubutunikakaruhoureitou/02zyourei/saitamakenntikyuuonndannkataisakusuisinnzyourei/kannkyouhairyoseidonituite.html" target="_blank">都市整備部 建築安全課 建築指導担当（埼玉県建築物環境配慮制度についてのページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>16</td>
										<td>愛知県</td>
										<td>Oct-09</td>
										<td><a href="https://www.pref.aichi.jp/soshiki/kenchikushido/0000083264.html" target="_blank">建設部建築局住宅計画課建築環境グループ （CASBEEあいちのページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>17</td>
										<td>神奈川県</td>
										<td>Apr-10</td>
										<td><a href="http://www.pref.kanagawa.jp/cnt/f6675/" target="_blank">環境農政局環境部環境計画課 （建築物温暖化対策計画書制度のページ）</a></td>
										<td>確認申請予定日の21日前まで</td>
									</tr>
									<tr>
										<td>18</td>
										<td>千葉市</td>
										<td>Apr-10</td>
										<td><a href="https://www.city.chiba.jp/toshi/kenchiku/johosoudan/casbee-top.html" target="_blank">都市局建築部建築情報相談課構造設備班（千葉市建築物環境配慮制度のページ）</a></td>
										<td>着工前まで</td>
									</tr>
									<tr>
										<td>19</td>
										<td>鳥取県</td>
										<td>Apr-10</td>
										<td><a href="http://www.pref.tottori.lg.jp/dd.aspx?menuid=97239" target="_blank">生活環境部くらしの安心局住まいまちづくり課 （鳥取県建築物環境配慮計画制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>20</td>
										<td>新潟市</td>
										<td>Apr-10</td>
										<td><a href="http://www.city.niigata.lg.jp/kurashi/jyutaku/kenchiku/sonotahorei/todoke_index/casbeeniigata.html" target="_blank">建築部建築行政課 （新潟市建築環境総合性能評価制度のページ）</a></td>
										<td>確認申請予定日の10日前まで</td>
									</tr>
									<tr>
										<td>21</td>
										<td>広島市</td>
										<td>Apr-10</td>
										<td><a href="https://www.city.hiroshima.lg.jp/soshiki/140/449.html" target="_blank">都市整備局指導部建築指導課 （建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>22</td>
										<td>熊本県</td>
										<td>Oct-10</td>
										<td><a href="https://www.pref.kumamoto.jp/soshiki/115/4399.html" target="_blank">土木部建築課 （建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>23</td>
										<td>柏市</td>
										<td>Jan-11</td>
										<td><a href="http://www.city.kashiwa.lg.jp/soshiki/140200/p001589.html" target="_blank">都市部建築指導課 （柏市建築物環境配慮制度のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>24</td>
										<td>堺市</td>
										<td>Aug-11</td>
										<td><a href="https://www.city.sakai.lg.jp/benri/download/download_kigyo/mokuteki/sangyo/tochi/kensetsushido/casbeesakai.html" target="_blank">建築都市局 開発調整部 建築安全課（CASBEE堺のページ）</a></td>
										<td>工事着手予定日の21日前まで</td>
									</tr>
									<tr>
										<td>25</td>
										<td>東京都</td>
										<td>Nov-02</td>
										<td><a href="https://www7.kankyo.metro.tokyo.lg.jp/building/index.html" target="_blank">「東京都建築物環境計画書制度」ヘルプデスク（建築物環境計画書制度のページ）</a></td>
										<td>建築確認申請等及び認定申請の日まで</td>
									</tr>
								</tbody>
							</table>
						</div>

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