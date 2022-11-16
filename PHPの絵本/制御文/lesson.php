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
<br>

<!-- 例題2 -->
<?php
$a = 90;
if ($a > 80) {
  if ($a == 100) {
    print "100点満点<br>";
  } else {
    print "100点までもう少しです。あと" . (100 - $a) . "点です<br>";
  }
} else {
  print "頑張りましょう<br>";
}
?>