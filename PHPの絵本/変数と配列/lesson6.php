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
  print "サーバーのドメイン名は\""
    . $_SERVER["HTTP_HOST"] . "\"です<br>\n";

  print "スクリプトの相対パスは\""
    . $_SERVER["SCRIPT_NAME"] . "\"です。<br>\n";
  ?>

  <form action="lesson6-6.php" method="POST">
    <p>私の名前は<input type="test" name="myname"></p>
    <input type="submit" value="確認">
  </form>
</body>

</html>