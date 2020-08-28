<?php


    $scores = array(65, 92, 98, 50, 70, 90, 100, 20);
     //陣列的方式，可用在單科全班的分數

	$total = array_sum($scores); //直接用函數運算
	$score = $total / count($scores);

	echo "總分：". $total . "分<br>";
	echo "平均：". $score . "分<br>";
	echo "全班平均等級是";
	if ($score>=90) {
		echo "A！";
	} else if ($score>=80) {
		echo "B！";
	} else if ($score>=70) {
		echo "C！";
	} else if ($score>=60) {
		echo "D！";
	} else {
		echo "F！";
	}
?>

