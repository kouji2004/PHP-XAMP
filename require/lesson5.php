<?php
// ファイルの取り込み
require("in.php");
require("in.php");
require("in.php");
?>

<h1>/////////////////////////</h1>

<?php
// インクルードファイルがない場合
require("in.php");
echo "ファイルないよ\n";
?>

<h1>/////////////////////////</h1>

<?php
// ファイルの取り込み
require_once("in.php");
require_once("in.php");
require_once("in.php");
?>

<p>既にrequireが使われているため表示されない。もしrequireが使われていなければ
  実行結果は
  require と require_once のサンプルスクリプトだよ。の記述が一つだけ表示される。
</p>