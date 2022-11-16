<!-- 関数の呼び出し -->

<?php
function funcnm($a)
{
  print "引数は $a<br>\n";
}
$a = 10;
funcnm(5);
funcnm($a);
?>