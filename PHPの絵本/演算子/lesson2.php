<!-- 比較演算子 -->
<?php
// 条件式はtruの場合は１を返す
// 条件式がfalseの場合は0を返す
$a = 10;
$b = 20;

print $a < $b;
// 実行結果:1
print $a == $b;
// 実行結果:何も表示されない
?>

<!-- 配列演算子 -->
<?php
$a = array(1, 2);
$b = array(3, 4, 5);
$c = $a + $b;

print $a[0];
// 実行結果:1
print $b[1];
// 実行結果:4
print $c[2];
// 実行結果:5
?>
<br>

<!-- 例題1 -->

<?php
$a = array(0 => 0, 1 => 1);
$b = array(1 => 1, 0 => 0);
$c = array(0 => 0, 1 => "1");

var_dump($a == $b);
//実行結果:bool(true) 
var_dump($a === $b);
// 実行結果:bool(false)
print "<br>";

var_dump($a == $c);
//実行結果:bool(true) 
var_dump($a === $c);
// 実行結果:bool(false)


?>