<!-- for文 -->
<?php
for ($i = 0; $i <= 3; $i++) {
  print "count" . $i . "<br>";
}
?>
<br>

<!-- 2重ループ -->
<?php
for ($j = 1; $j <= 2; $j++) {
  for ($i = 1; $i <= 3; $i++) {
    print($i - $j);
    print "<br>";
  }
}
?>
<br>

<?php
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    print "$i*$j=" . ($i * $j) . "<br>";
  }
}
?>