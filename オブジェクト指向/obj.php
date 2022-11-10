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


  public function hit($point)
  {
    echo "攻撃した!モンスターに" . $point . "のダメージ<br>";
  }

  function runAway()
  {
    echo "逃げた!<br>";
  }

  //モンスターからの攻撃でhpが減る
  public function attacked($point)
  {
    $this->damaged($point);
    $this->hitPoint -= $point;
    echo "残りhpは" . $this->hitPoint . "です...<br>";
  }

  //モンスターからのダメージ
  private function damaged($point)
  {
    echo "モンスターからの攻撃を受けた<br>";
    echo $point . "のダメージ!<br>";
  }
}


//クラスの親子関係
class Wizard extends character
{

  //じゅもん
  public function magic()
  {
    echo "魔法を唱えた<br>";
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

$hero->attacked(5);

$Wizard = new Wizard();
$Wizard->magic();
