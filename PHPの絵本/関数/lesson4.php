<?php
function addnum($a, $b)
{
  $c = $a + $b;
  return $c;
}

$x = 4;
$y = 5;
$z = addnum($x, $y);
print "$x+$y=$z";
