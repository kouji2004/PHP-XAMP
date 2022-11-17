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
  $b = $_SESSION["bridge"];
  print "2ページの値は $b です";
  ?>

  <p><a href="lesson2.php">ページ2へ</a></p>
</body>

</html>