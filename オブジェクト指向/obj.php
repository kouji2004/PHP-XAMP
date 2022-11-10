<!-- クラスを作る -->

<?php

class character
{
  public $hitPoint;

  //初期化メソッド
  public function __construct()
  {
    $this->hitPoint = 30;
    echo "初期HPは" . $this->hitPoint . "です!<br>";
    //$thisはクラス全体のこと
  }



  function hit($point)
  {
    echo "攻撃した!モンスターに" . $point . "のダメージ<br>";
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

print_r($hero);
echo "<br>";
$hero->hit(5);

//設計図のまま使う方法
//クラス名::メソッド名
// クラスメソッド名の前にstatic
// character::hit(5);

//アクセス修飾→public,static,protected