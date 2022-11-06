<?php
$modo = "input";

if (isset($_POST["back"]) && $_POST["back"]) {
  //何もｓない
} else if (isset($_POST["confirm"]) && $_POST["confirm"]) {
  $modo = "confirm";
} else if (isset($_POST["send"]) && $_POST["send"]) {
  $modo = "send";
}
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
  <?php if ($modo == "input") { ?>
    <!--入力画面-->
    <form action="contact.php" method="post">
      名前<input type="text" name="name" value=""><br>
      Eメール<input type="email" name="email" value=""><br>
      お問い合わせ内容<br>
      <textarea cols="40" rows="8" name="message"></textarea><br>
      <input type="submit" name="confirm" value="確認" />
    </form>

  <?php } else if ($modo == "confirm") { ?>
    <!--確認画面-->
    <form action="contact.php" method="post">
      名前 <?php echo $_POST["name"] ?><br>
      Eメール <?php echo $_POST["email"] ?><br>
      お問い合わせ内容<br>
      <?php echo nl2br($_POST["message"]) ?>
      <input type="submit" name="back" value="戻る" />
      <input type="submit" name="send" value="送信" />
    </form>

  <?php } else { ?>
    <!--完了画面-->

  <?php } ?>
</body>

</html>