<h1>超級無敵大樂套預測王</h1>
<hr>
<?php
	$count = 0 ;//目前取得的數字個數
	while($count<6) {
		$t = rand(1, 49);//先取得一個候選的隨機數
		if (in_array($t, $lotto)) continue;
		$lotto[] = $t;
		$count ++; //每成功做好一次就要加一，避免無線迴圈
	}
	
	sort($lotto);  //數字排序
	foreach($lotto as $no){    //foreach這個迴圈會把陣列的內容逐一取出
	echo $no . ", ";
    }
	//特別號的設計
    echo "<br>特別號:";
    $spec = rand(1, 49);//隨機抽取
    while (in_array($spec, $lotto))//檢查有無重複，若無才輸出
        $spec = rand(1, 49);
    echo $spec;
    
  
?>
<hr>
<iframe width="336" height="189" src="https://www.youtube.com/embed/Ir--OcRp4RE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="336" height="189" src="https://www.youtube.com/embed/9y7mtmO3-D0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="336" height="189" src="https://www.youtube.com/embed/Yn_zBqCIer8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
<h3>不準免錢，有中樂捐專線:0800-123-123</h3>