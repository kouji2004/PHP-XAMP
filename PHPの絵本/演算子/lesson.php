<!-- 演算子 -->
<?php
$a = 5 + 5;
$b = 5 * 5;
$c = 5 - 6;
$d = 5 / 5;

print "5+5は $a<br>\n";
print "5*5は $b<br>\n";
print "5-6は $c<br>\n";
print "5/5は $d<br>\n";
?>

<!-- 複合演算子 -->
<?php
$a = 90;
$a += 10;

print "$a<br>";
?>

<!-- インクリメント演算子(++)とデクリメント演算子(--) -->
<?php
$a = 1;
print "はじめは $a でした<br>";
$a++;
print "1増えて $a になりました<br>";
$a--;
print "1減って $a に戻りました<br>";

// 実行結果
// はじめは 1 でした
// 1増えて 2 でした
// 1減って 1 に戻りました
?>



