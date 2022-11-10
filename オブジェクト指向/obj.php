<!-- クラスを作る -->

<?php

class character
{
  public $hitpoint;

  function hit()
  {
    echo "攻撃した!<br>";
  }

  function runAway()
  {
    echo "逃げた!<br>";
  }
}


// クラスをオブジェクト化して使う（動的）
// $オブジェクト名　= new クラス名(引数);
// -> ←アロー演算子


$hero = new character();
$hero->hitpoint = 20;

// print_r($hero);
// echo "<br>";
