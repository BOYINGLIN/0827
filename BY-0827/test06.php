<h2>第6個練習程式：break/continue</h2>
<hr>
<?php
    for($i=0; $i<10; $i++) {
       if ($i%2) continue; //$2==0則可找出奇數
       echo $i. "<br>";
    }
    ?>