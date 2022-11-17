<?php
setcookie("val", 100);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $getval = isset($_COOKIE["val"]) ? $_COOKIE["val"] : "(なし)";
  print "ページ1の値は $getval です。\n";
  ?>

  <p><a href="lesson1-1.php">ページ２へ</a></p>
</body>

</html>