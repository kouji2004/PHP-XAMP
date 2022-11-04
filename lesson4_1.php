<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include("lesson4.php"); ?>
  <p>モンスターが現れた</p>
  <p>-----------------------</p>
  <p>勇者の攻撃</p>
  <p><?php echo ("モンスターに" . $damage1) . "与えた" ?></p>
  <p>-----------------------</p>
  <p>勇者の攻撃</p>
  <p><?php echo ("モンスターに" . $damage2) . "与えた" ?></p>
  <p>-----------------------</p>
  <p>勇者の攻撃</p>
  <p><?php echo ("モンスターに" . $damage3) . "与えた" ?></p>
  <p>-----------------------</p>
  <p><?php echo ($kougeki . "のダメージを与えた") ?></p>
  <p>-----------------------</p>
  <p><?php echo ($kekka) ?></p>
</body>

</html>