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
  <form action="Twitter2.php" method="post">
    <textarea name="tweet"></textarea>
    <button>送信</button>
  </form>

  <?php
  session_start();
  if (!isset($_SESSION["tweets"])) {
    $_SESSION["tweets"] = [];
  }

  if (isset($_SESSION["tweet"]) !== "") {
    $_SESSION["tweets"][] = $_POST["tweet"];
  }
  ?>

  <?php
  foreach (array_reverse($_SESSION["tweets"]) as $tweet) {
  ?>
    <?= $tweet ?>
  <?php
  }
  ?>
</body>

</html>