<?php

$post1_query = new WP_Query(
	array(
		'post_type' => 'result',
		'posts_per_page' => 5,
		'post_status' => 'publish',
		'order' => 'DESC',
		'orderby' => 'date',
	)
);

$post1_id = array();

while ($post1_query->have_posts()) : $post1_query->the_post();

	array_push($post1_id, $post->ID);

endwhile;
wp_reset_postdata();


$post2_query = new WP_Query(
	array(
		'post_type' => 'result',
		'nopaging' => -1,
		'post_status' => 'publish',
		'order' => 'DESC',
		'orderby' => 'date',
		'post__not_in' => $post1_id
	)
);


get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>Business Results</span>
			<h1>業務実績一覧</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="#">TOP</a>
	<span>/</span>
	<span>業務実績一覧</span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

		<?php echo do_shortcode('[track_record__text]'); ?>


			<h2 class="box-round-title">実績一覧</h2>
		</div>

		<div class="result-list">
			<div class="contents-inner">

				<?php
				$count = 1;
				while ($post1_query->have_posts()) : $post1_query->the_post();
				?>

					<div class="result-item">
						<div class="number">0<?php echo $count++; ?></div>
						<div class="content">
							<ul>
								<li><span>業務</span><span><?php the_field('gyoumu'); ?></span></li>
								<li><span>種別</span><span><?php the_field('syubetsu'); ?></span></li>
								<li><span>用途</span><span><?php the_field('youto'); ?></span></li>
							</ul>
							<ul>
								<li><span>構造</span><span><?php the_field('kouzou'); ?></span></li>
								<li><span>規模</span><span><?php the_field('kibo'); ?></span></li>
								<li><span>建設地</span><span><?php the_field('kensetsuchi'); ?></span></li>
							</ul>
						</div>
					</div>

				<?php endwhile;
				wp_reset_postdata(); ?>


			</div>
		</div>
	</div>
	<!-- /.contents-box c-box01 -->


	<div class="contents-box c-box02">
		<div class="contents-inner">


			<div class="headding">
				<div class="title">その他多数実績がございます。</div>
			</div>

			<div class="table-box">
				<table class="parts-table">
					<tr>
						<th>業務</th>
						<th>種別</th>
						<th>用途</th>
						<th>構造</th>
						<th>規模</th>
						<th>建設地</th>
					</tr>

					<?php

					$file = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/HORIZON/result_data.csv';

					/*
					$line[0]:依頼業務
					$line[1]:種別
					$line[2]:用途
					$line[3]:構造
					$line[4]:規模
					$line[5]:建設地
					*/

					//CSVファイルを読み込みモードでオープン
					if (($fp = fopen($file, 'r')) !== FALSE) {
						$row = 0;
						$countnum = 1;
						//CSVファイルを1行ずつ読み込む
						while (($line = fgetcsv($fp)) !== FALSE) {
							if ($countnum < 6) {
								$countnum++;
								continue;
							} elseif ($countnum <= 6) {
								echo "					<tr>\n";
								echo "						<td class=\"light-blue\">" . $line[0] . "</td>\n";
								echo "						<td>" . $line[1] . "</td>\n";
								echo "						<td>" . $line[2] . "</td>\n";
								echo "						<td>" . $line[3] . "</td>\n";
								echo "						<td>" . $line[4] . "</td>\n";
								echo "						<td>" . $line[5] . "</td>\n";
								echo "					</tr>\n";
							}
							$row++;
						}
					} else {
						echo 'ファイルの読み込みに失敗しました。';
					}

					//ファイルをクローズ
					fclose($fp);

					?>






					<?php /*
						<?php
							while ($post2_query->have_posts()) : $post2_query->the_post();
						?>
						<tr>
							<td class="light-blue"><?php the_field('gyoumu'); ?></td>
							<td><?php the_field('syubetsu'); ?></td>
							<td><?php the_field('youto'); ?></td>
							<td><?php the_field('kouzou'); ?></td>
							<td><?php the_field('kibo'); ?></td>
							<td><?php the_field('kensetsuchi'); ?></td>
						</tr>
						<?php endwhile; wp_reset_postdata(); ?>
					*/ ?>
				</table>
			</div>
			<div class="btn blue dl" style="margin-top: 60px;text-align: center;">
				<a href="https://test.ceec.jp/wp-content/themes/HORIZON/ceec-result_20240430.pdf" target="_blank" rel="noopener noreferrer" class="button waves-effect">
					<span>実績一覧.pdf（1,388KB）</span>
					<span class="material-symbols-outlined">picture_as_pdf</span>
				</a>
			</div>
		</div>
	</div>
	<!-- /.contents-box c-box02 -->

</div>
<!-- /#contents -->



<?php get_footer(); ?>