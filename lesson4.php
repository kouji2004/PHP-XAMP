<?php

$monster = 90000000;

//1回目の攻撃
$damage1 = mt_rand(30000000, 40000000);
//2回目の攻撃
$damage2 = mt_rand(30000000, 40000000);
//3回目の攻撃
$damage3 = mt_rand(30000000, 40000000);

$kougeki = $monster - ($damage1 + $damage2 + $damage3);


if ($kougeki <= 0) {
  $kekka ="モンスターを撃退";
} else {
  $kekaa = "モンスターが逃げました";
}
