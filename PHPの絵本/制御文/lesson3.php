<!-- foreach -->
<?php
$a = array(1, 2, 3);
foreach ($a as $key => $b) {
  print "$key<br>\n";
}
?>
<br>

<!-- 例題1 -->

<?php
$siki = array("spr" => "春", "sum" => "夏", "aut" => "秋", "win" => "冬",);
foreach ($siki as $key => $b) {
  print "$key は $b<br>\n";
}
?>
