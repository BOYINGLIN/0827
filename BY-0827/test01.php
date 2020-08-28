<h2>第1個練習程式：1~9的平方和三次方列表</h2>
<hr>
<?php
echo "<table border=0 width=300>";
echo "<tr bgcolor=#e0e2fa><td align=center>i</td><td align=center>i**2</td><td align=center>i**3</td></tr>"; //標題列
	for($i=1; $i<=9; $i++) {
       if ($i%2) //條件透過餘數運算來區分顏色
       	echo"<tr bgcolor=#a3b6e2>";
       else
        echo "<tr bgcolor=#e0ffe0>";
		echo "<td align=center width=100>".$i.
		"</td><td align=center width=100>".$i**2 .
		"</td><td align=center width=100>" .$i**3 ."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>