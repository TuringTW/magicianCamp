<?php 
	header("Content-Type:text/html; charset=utf-8");
	echo "撲克牌共59張，52+4+2+1<hr>";
	for ($i=1; $i < 60; $i++) { 
		echo "卡片".$i,"<br>";
?>
		<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampCard%3A<?=sha1($i)?>">
		<hr>

<?php
	}

	echo "<br>道具共43張，41+2<hr>";
	for ($i=1; $i < 44; $i++) { 
		echo "道具".$i,"<br>";
?>
		<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampTool%3A<?=sha1($i)?>">
		<hr>
	
<?php } ?>
錢(沒有加密):
<hr>
+100
<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+100"><hr>
+200<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+200"><hr>
+300<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+300"><hr>
+500<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+500"><hr>
+1000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+1000"><hr>
+2000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+2000"><hr>
+15000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A+15000"><hr>
-100<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-100"><hr>
-200<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-200"><hr>
-300<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-300"><hr>
-500<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-500"><hr>
-1000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-1000"><hr>
-2000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-2000"><hr>
-15000<br>
<img src="http://chart.apis.google.com/chart?chs=150x150&chld=M|1&cht=qr&chl=magicCampMoney%3A-15000"><hr>

