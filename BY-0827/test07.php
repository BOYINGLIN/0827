<h1>BMI試算</h1>
<hr>
<button type=button><a href="index.php"><h3>回首頁</h3></a></button>
<button type=button><a href="test07.php?weight=93&height=1.89"><h3>小明的BMI</h3></a></button>
<button type=button><a href="test07.php?weight=45&height=1.56"><h3>小每的BMI</h3></a></button>
<button type=button><a href="test07.php?weight=75&height=1.75"><h3>小林的BMI</h3></a></button>
<Hr>
<?php
        $height = $_GET["height"] ;
        $weight = $_GET["weight"] ;
    if ($weight!= NULL and $height!= NULL){ 
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
    }else{
    	echo "<h2>請在網址php後方輸入?weight=你的體重&height=你的身高<br></h2>";
    }
	echo"<hr>";

?>

