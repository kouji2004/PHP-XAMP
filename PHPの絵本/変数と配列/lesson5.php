<!-- 配列の破壊 -->
<?php
$a = array("a", "b", "c", "d");
unset($a[0]);

echo $a[0];
//実行結果:エラー
echo $a[1];
//実行結果:b
?>

