<!-- ループの中断 -->
<?php
$a = 2;

for ($b = 0; $b <= 5; $b++) {
  if ($b - $a == 0) {
    break;
  }
  print $b . "<br>";
}
?>