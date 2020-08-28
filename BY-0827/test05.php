<h1>利息試算程式</h1>
<hr>
<form method='POST' action="test05.php"> 
  本金：<input type="text" size="10" name="money" value="1000000">元<br>
  利率：<input type="text" size="10" name="rate" value="2.4">%<br>
  期數：<input type="text" size="10" name="years" value="15">年<br>
  <input type="submit" value="計算">
</form>
<hr>
<?php
	$money = $_POST["money"];
	$rate = $_POST["rate"]/100;
	$years = $_POST["years"];

	echo "<table border=1 width=300>";
	
	echo "<tr>";

	echo "<td width=120 bgcolor=#c5E6FF>本金</td><td bgcolor=#ccaaaa>" . $money . "元</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#c5E6FF>利率</td><td bgcolor=#ccaaaa>" . $rate * 100 . "%</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#c5E6FF>期數</td><td bgcolor=#ccaaaa>" . $years . "年</td>";
	echo "</tr>";

	$s_amount = $money * (1 + $rate * $years);
	$c_amount = $money * (1 + $rate) ** $years;

	echo "<tr>";
	echo "<td bgcolor=#c5E6FF>單利試算結果</td><td bgcolor=#ccaaaa>" . (int)$s_amount . "元</td>";
	echo "</tr>";

	echo "<td bgcolor=#c5E6FF>複利試算結果</td><td bgcolor=#ccaaaa>" . (int)$c_amount . "元</td>";
	echo "</table>";
?>