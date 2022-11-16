<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自動販売機</title>
</head>

<body>
  <?php
  $m = $_POST["monay"];
  $r = $m - 120;
  $kouka = array(500, 100, 50, 10);

  if ($r < 0) {
    print "お金が足りない";
  } elseif ($m > 1000) {
    print "1000円以内のお金を入れてください";
  } elseif ($r == 0) {
    print "<p>お釣りはありません</p>";
  } else {
    print "<p>ありがとうございました。お釣りは $r 円です</p>\n";
    print "硬貨の枚数は次の通りです";

    $n = 0;
    while ($kouka[$n]) {
      print $kouka[$n] . "円玉" . (int)($r / $kouka[$n]) . "枚<br>";
      $r = $r % $kouka[$n];
      $n++;
    }
  }
  ?>
</body>

</html>