<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 誕生日の入力フォーム -->
  <form action="sample.php" method="POST">
    <p>星座を調べます。<br>半角数字で誕生日を入力してください<br>
      <input type="text" name="month">月
      <input type="text" name="day">日
      <input type="submit" value="調べる">
    </p>
  </form>

  <?php
  function seiza($a, $b)
  {
    if ((($a == 3) && (21 <= $b && $b <= 31)) ||
      (($a == 4) && (1 <= $b && $b <= 20))
    ) {
      return "牡羊座(おひつじ座)";
    } elseif ((($a == 4) && (21 <= $b && $b <= 30)) ||
      (($a == 5) && (1 <= $b && $b <= 21))
    ) {
      return "牡牛座(おうし座)";
    } elseif ((($a == 5) && (22 <= $b && $b <= 31)) ||
      (($a == 6) && (1 <= $b && $b <= 21))
    ) {
      return "双子座(ふたご座)";
    } elseif ((($a == 6) && (22 <= $b && $b <= 30)) ||
      (($a == 7) && (1 <= $b && $b <= 22))
    ) {
      return "蟹座(かに座)";
    } elseif ((($a == 7) && (23 <= $b && $b <= 31)) ||
      (($a == 8) && (1 <= $b && $b <= 22))
    ) {
      return "獅子座(しし座)";
    } elseif ((($a == 8) && (23 <= $b && $b <= 31)) ||
      (($a == 9) && (1 <= $b && $b <= 23))
    ) {
      return "乙女座(おとめ座)";
    } elseif ((($a == 9) && (24 <= $b && $b <= 30)) ||
      (($a == 10) && (1 <= $b && $b <= 23))
    ) {
      return "天秤座(てんびん座)";
    } elseif ((($a == 10) && (24 <= $b && $b <= 31)) ||
      (($a == 11) && (1 <= $b && $b <= 22))
    ) {
      return "蠍座(さそり座)";
    } elseif ((($a == 11) && (23 <= $b && $b <= 30)) ||
      (($a == 12) && (1 <= $b && $b <= 21))
    ) {
      return "射手座(いて座)";
    } elseif ((($a == 12) && (22 <= $b && $b <= 31)) ||
      (($a == 1) && (1 <= $b && $b <= 20))
    ) {
      return "山羊座(やぎ座)";
    } elseif ((($a == 1) && (20 <= $b && $b <= 31)) ||
      (($a == 2) && (1 <= $b && $b <= 18))
    ) {
      return "水瓶座(みずがめ座)";
    } elseif ((($a == 2) && (19 <= $b && $b <= 29)) ||
      (($a == 3) && (1 <= $b && $b <= 20))
    ) {
      return "魚座(うお座)";
    } else {
      return "不明";
    }
  }

  $m = isset($_POST["month"]) ? $_POST["month"] : "";
  $d = isset($_POST["day"]) ? $_POST["day"] : "";

  if ($m && $d) {
    $s = seiza($m, $d);
    print "$m 月　$d 日生まれ $s です";
  }
  ?>
</body>

</html>