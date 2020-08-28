<?php
    $names= array("小明", "小美", "曉華", "小林");
    $heights = array(1.74, 1.56, 1.72, 1.65);
	$weights = array(72, 45, 85, 55);
  //斜線處為未完成的表格設計
 // echo "<table border=1  width=500 bgcolor=aliceblue>\n";
  //echo "<tr><td align=center>Name</td>";
  //echo "<td align=center>Height</td>";
  //echo "<td align=center>Weight</td>";
  //echo "<td align=center>BMI數值</td>";
  //echo "<td align=center>評估結果</td></tr>";
    for ($i=0; $i<count($names); $i++) {
    	echo "姓名：". $names[$i] . "<br>";
    	$height = $heights[$i];
        $weight = $weights[$i];
	echo "身高：". $height . "公尺<br>";
	echo "體重：". $weight . "公斤<br>"; 
	$bmi = $weight / $height ** 2;
	echo "BMI：" . (int)$bmi . "<br>";
	if ($bmi>24) {
		echo "體重有些太重囉！";
	} else if ($bmi>=18.5) {
		echo "體重很標準耶！";
	} else {
		echo "體重有些太輕了！";
	}
	echo"<hr>";
	}
?>

