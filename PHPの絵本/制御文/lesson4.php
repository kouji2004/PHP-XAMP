<!-- while文 -->
<?php
while ($a < 5) {
  print "count" . $a++ . "<br>";
}
?>
<br>

<!-- do~while -->
<?php
$s = $i = 0;
do {
  $i = ++$i;
  $s = $s + $i;
} while ($i < 10);
print "1から" . $i . "　までの和は" . $s;
?>