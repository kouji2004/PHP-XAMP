<!-- if文 -->
<?php
$a = 5;
if ($a % 2 == 0) {
  print "\$aは偶数です";
} else {
  print "\$aは奇数です";
}
?>
<br>

<!-- 例題1 -->
<?php
$a = 60;
print "あなたの点数は" . $a . "です<br>";
if ($a < 70) {
  print "平均まで" . (70 - $a) . "点<br>";
} else {
  print "よくできました。<br>";
}
?>
