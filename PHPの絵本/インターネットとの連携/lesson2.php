<?php
session_start();
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
  $_SESSION["bridge"] = 100;
  $b = $_SESSION["bridge"];
  print "1ページの値は $b です";
  ?>

  <p><a href="lesson2-2.php">2ページへ</a></p>
</body>

</html>