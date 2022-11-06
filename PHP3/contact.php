<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <from action="./contact.php" method="post">
    名前<input type="text" name="name" value=""><br>
    Eメール<input type="email" name="email" value=""><br>
    お問い合わせ内容<br>
    <textarea cols="40" rows="8" name="message"></textarea>
    <input type="submit" name="confirm" value="確認"></input>

  </from>
</body>

</html>