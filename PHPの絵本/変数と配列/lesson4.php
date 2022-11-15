<!-- 配列 -->
<?php
$a = array(1, 2, 3);

echo $a[1];
?>

<br>
<br>

<?php
$a = array(100, "neko");

echo $a[0];
?>

<br>
<br>

<!-- 配列の要素を参照・代入する -->
<?php
$a = array(1, 2, 3);

$a[0] = "one";
$a[1] = "two";
$a[2] = "three";

echo $a[0];
// 実行結果:one
echo $a[1];
// 実行結果:two
echo $a[2];
// 実行結果:three
?>

<br>
<br>

<!-- 連想配列 -->
<?php
$a = array("dog" => "犬", "cat" => "ねこ");

echo $a["dog"];
// 実行結果:犬
?>

<br>
<br>

<!-- 多次元配列 -->
<?php
$a = array(1, 2, 3);
$a2 = array(4, 5, 6,);

$all = array($a, $a2);

echo $all[1][2];
//実行結果:6
?>
<br>
<br>

<?php
$a = [[1, 2, 3], [4, 5, 6,]];
echo $a[1][1];

?>