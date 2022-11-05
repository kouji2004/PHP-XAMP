<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>twitter</title>
</head>

<body>
  <h1>練習</h1>
  <form action="Twitter.php" method="post">
    <textarea name="tweet"></textarea>
    <button>送信</button>
  </form>


  <?php
  $tweets = [];
  if (isset($POST_["tweet"]) && $POST_["tweet"] !== "") {
    $tweets[] = $POST_["tweet"];
  }
  ?>

  <?php
  foreach ($tweets as $tweet) {
  ?>
    <p><?= $tweet ?></p>
  <?php
  }
  ?>
</body>

</html>