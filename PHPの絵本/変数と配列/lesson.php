<!-- 変数は数値や文字などを格納しておく、箱のようなもの -->


<!-- ⓵変数の利用 -->
<?php
$a = 2;

echo $a . "<br>";
?>

<!-- ⓶いろいろな代入 -->
<?php
$a = 2;
$b = 3;

echo $a . "<br>", $b . "<br>";
?>

<!-- ⓷変数の表示 -->
<?php
$a = 100;
var_dump($a) . "<br>";
// 実行結果:int(100)

$b = 2.2;
var_dump($b) . "<br>";
// 実行結果:float(2.2)

$c = true;
var_dump($c) . "<br>";
//実行結果:bool(true)

$d = null;
var_dump($d) . "<br>";
//実行結果:NULL

$e = "PHPの絵本";
var_dump($e) . "<br>";
//実行結果:string(12) "PHPの絵本"

?>