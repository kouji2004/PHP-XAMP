<?php
$list = ["a", "b", "c"];

foreach ($list as $value) {
  echo $value;
}

//実行結果
//abc

//構造(valueの所がそれぞれの配列（a,b,c）に置き換わっている)
//step1
//foreach([a,b,c]as a){
  //aを使った処理
//}

//step2
//foreach([a,b,c]as b){
  //bを使った処理
//}

//step3
//foreach([a,b,c]as c){
  //cを使った処理
//}