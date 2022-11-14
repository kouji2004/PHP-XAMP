<!-- 型:var_dump()関数のところで出てきた数値型や倫理型,NULL型について学ぶ -->

<!-- 種類
⓵数値型(integer)
⓶浮動小数点数(float,dobule)
⓷倫理型(boolean)
⓸NUUL型
⓹文字列型 -->


<!-- ⓵数値型(integer) -->
<?php
$integer = 123;
echo $integer . "<br>";
?>

<!-- ⓶浮動小数点数(float,dobule) -->
<?php
$dobule = 0.123;
echo $dobule . "<br>";
?>

<!-- ⓷倫理型(boolean) -->
<?php
$boolean = true;
echo $boolean;
// 実行結果:1
?>

<?php
$boolean = false;
echo $boolean;
// 実行結果:何も表示されない
?>

<!-- ⓸NUUL型  -->
<?php
$a = null;
echo $a;
//NULLは空っぽを表す値で、0ではない
?>


<br>
<br>

<!-- ⓹文字列型(string)1-1 -->
<?php
$a = "aiueo";
$b = "kakikukeko";
echo $a . "<br>", $b . "<br>";
?>

<!-- ⓹文字列型(string)1-2 -->