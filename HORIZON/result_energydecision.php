<div class="contents-box c-box10" id="ANC_RESULT">
<div class="contents-inner">
<h2 class="section-title"><div class="title">実績一覧</div></h2>
<?php echo do_shortcode('[track_record__text]'); ?>
<div class="result-list">
<?php

$file = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/HORIZON/result_data.csv';

/*
$line[0]:依頼業務
$line[1]:種別
$line[2]:用途
$line[3]:構造
$line[4]:規模
$line[5]:建設地
*/

//CSVファイルを読み込みモードでオープン
if (($fp = fopen($file, 'r')) !== FALSE){
	$row = 0;
	$count = 1;
	$result_type = "";
	//CSVファイルを1行ずつ読み込む
	while (($line = fgetcsv($fp)) !== FALSE) {
		$result_type = $line[0];
		if($result_type =="省エネ適判" && $row < 5){
echo "								<div class=\"result-item\">\n";
echo "								<div class=\"number\">0". $count++ ."</div>\n";
echo "								<div class=\"content\">\n";
echo "								<ul>\n";
echo "								<li><span>業務</span><span>".$line[0]."</span></li>\n";
echo "								<li><span>種別</span><span>".$line[1]."</span></li>\n";
echo "								<li><span>用途</span><span>".$line[2]."</span></li>\n";
echo "								</ul>\n";
echo "								<ul>\n";
echo "								<li><span>構造</span><span>".$line[3]."</span></li>\n";
echo "								<li><span>規模</span><span>".$line[4]."</span></li>\n";
echo "								<li><span>建設地</span><span>".$line[5]."</span></li>\n";
echo "								</ul>\n";
echo "								</div>\n";
echo "								</div>\n";

			$row++;
		}
	}
}else{
	echo 'ファイルの読み込みに失敗しました。';
}

//ファイルをクローズ
fclose($fp);

?>


<div class="btn blue" style="margin: 30px auto 0; text-align: center;">
<a href="/result" class="button waves-effect">実績一覧</a>
</div>
</div>
</div>
</div>
<!-- /.contents-box result-box -->
