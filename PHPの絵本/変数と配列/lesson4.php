<!-- 配列 -->
<?php
$a = array(1, 2, 3);

echo $a[1];
?>

<?php
$a = array(100, "neko");

echo $a[0];
?>


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