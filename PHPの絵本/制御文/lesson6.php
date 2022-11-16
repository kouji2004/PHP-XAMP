<!-- 繰り返しの次の回に移る -->
<?php
$a = 1;
for ($b = 0; $b <= 5; $b++) {
  if ($a + $b == 2) {
    continue;
  }
  print "$a+$b=" . ($a + $b) . "<br>";
}
?>