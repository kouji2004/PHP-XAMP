<?php
//変数に文字列を代入
$text_1 = "雨ニモマケズ風ニモマケズ<span>雪ニモ夏ノ暑サニモマケヌ
丈夫ナカラダヲ</span>モチ慾ハナク決シテ瞋ラズ
イツモシヅカニワラッテヰル一日ニ玄米四合ト味噌ト少シノ野菜ヲタベ
アラユルコトヲジブンヲカンジョウニ入レズニ";
$text_2 = "ヨクミキキシワカリソシテワスレズ野原ノ松ノ林ノ
小サナ萓ブキノ小屋ニヰテ東ニ病気ノコドモアレバ
行ッテ看病シテヤリ西ニツカレタ母アレバ行ッテソノ稲ノ朿ヲ負ヒ
南ニ死ニサウナ人アレバ行ッテコハガラナクテモイヽトイヒ";
$text_3 = "（宮沢賢治 「雨ニモマケズ」）";
?>

<!-- HTML5の文書型宣言 -->
<!DOCTYPE html>
<!-- 「lang属性」でコードが何語か設定宣言 -->
<html lang="ja">

<head>

  <!-- 文字エンコーディングの設定宣言 -->
  <meta charset="UTF-8">

  <!-- title宣言 -->
  <title>空の画像を表示しよう</title>

  <!-- スタイルシートCSS設定 -->
  <style>
    div {
      /* 文字の色 */
      color: #ff0000;
      /* ブラウザで表示される幅 */
      width: 50%;
      /* 上の余白の設定 */
      margin-top: 20px;
      /* 下記2行でコンテンツを中央寄せにする */
      margin-right: auto;
      margin-left: auto;
    }

    span {
      /* 文字の色 */
      color: #009900;
    }

    h1 {
      /* 文字の色 */
      color: #660000;
      /* 文字の大きさ */
      font-size: 30px;
    }
  </style>

</head>

<body>
  <div>
    <h1>PHPプログラミング</h1>
    <!-- 画像を表示 -->
    <img src="sinoaki.JPG" width="300px" height="200px" alt="青空">
    <p>
      <?php echo $text_1; ?>
    </p>
    <p>
      <?php echo $text_2; ?>
    </p>
    <?php echo $text_3; ?>
  </div>
</body>

</html>