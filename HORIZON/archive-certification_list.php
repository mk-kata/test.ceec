<?php


get_header(); ?>


<div id="mainVisual">
	<div class="contents-inner">
		<div class="title">
			<span>CERTIFICATION RESULTS</span>
			<h1>環境性能認証不動産一覧</h1>
		</div>
	</div>
</div>



<nav id="breadCrumb">
	<a href="<?php get_url(); ?>">TOP</a>
	<span>/</span>
	<span>環境性能認証不動産一覧</span>
</nav>



<div id="contents">

	<div class="contents-box c-box01">
		<div class="contents-inner">

			<div class="lead-text">過去のBELS・CASBEE不動産・CASBEEウィルネスオフィス・DBJ Green Building認証の<br>認証不動産をまとめて掲載しています。</div>

			<div class="btn blue mt50 tac"><a href="https://docs.google.com/spreadsheets/d/156BCEE5P3OT2TwZIRNlJgkfIdbgL_XYSNdvqqMEfFKk/edit?usp=sharing" target=”_blank” rel=”noopener” class="button waves-effect"><span>認証不動産一覧（約6,188件）はこちら</span></a></div>

		</div>

	<!-- /.contents-box c-box01 -->


	<div class="contents-box c-box02">
		<div class="contents-inner">
			
      <h2 class="box-round-title">環境性能認証不動産一覧（一部のみ紹介）</h2>
			
			<div class="headding">
				<div class="title">多くの物件が認証を取得しています。</div>
			</div>

			<div class="table-box">
				<table class="parts-table" id="sampleTable">
					<tr>
						<th cmanFilterBtn>評価</th>
						<th cmanFilterBtn>認証先・<br>申請者</th>
						<th cmanFilterBtn>物件名称</th>
						<th cmanFilterBtn>用途</th>
						<th cmanFilterBtn>延床面積（㎡）</th>
						<th cmanFilterBtn>評価ランク</th>
						<th cmanFilterBtn>竣工時期</th>
						<th cmanFilterBtn>建設地</th>
						<th cmanFilterBtn>有効期限</th>
					</tr>

<?php

$file = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/HORIZON/list_data.csv';

/*
$line[0]:評価
$line[1]:認証先・申請者
$line[2]:物件名称
$line[3]:用途
$line[4]:延床面積（㎡）
$line[5]:評価ランク
$line[6]:竣工時期
$line[7]:建設地
$line[8]:有効期限
*/

//CSVファイルを読み込みモードでオープン
if (($fp = fopen($file, 'r')) !== FALSE){
	$row = 0;
	$countnum = 1;
	//CSVファイルを1行ずつ読み込む
	while (($line = fgetcsv($fp)) !== FALSE) {
		if($countnum < 2){
			$countnum++;
			continue;
		}elseif($countnum <= 2){
echo "					<tr>\n";
echo "						<td class=\"light-blue\">".$line[0]."</td>\n";
echo "						<td class=\"thwidth\">".$line[1]."</td>\n";
echo "						<td class=\"thwidth\">".$line[2]."</td>\n";
echo "						<td>".$line[3]."</td>\n";
echo "						<td>".$line[4]."</td>\n";
echo "						<td>".$line[5]."</td>\n";
echo "						<td>".$line[6]."</td>\n";
echo "						<td>".$line[7]."</td>\n";
echo "						<td>".$line[8]."</td>\n";
echo "					</tr>\n";

		}
		$row++;
	}
}else{
	echo 'ファイルの読み込みに失敗しました。';
}

//ファイルをクローズ
fclose($fp);
 
?>

				</table>
			</div>

			<div class="btn blue mt50 tac"><a href="https://docs.google.com/spreadsheets/d/156BCEE5P3OT2TwZIRNlJgkfIdbgL_XYSNdvqqMEfFKk/edit?usp=sharing" target=”_blank” rel=”noopener” class="button waves-effect"><span>認証不動産一覧（約6,188件）はこちら</span></a></div>

		</div>
	</div>
	<!-- /.contents-box c-box02 -->

</div>
<!-- /#contents -->



<?php get_footer(); ?>