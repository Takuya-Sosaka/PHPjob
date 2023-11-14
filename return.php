<?php

  //②フォームからのデータを受け取ります
  $username = $_POST["username"];
  $number = $_POST["number"];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
    $resultNumber = $number * mt_rand (1,6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
    if ($resultNumber <= 10){
      $resultFortune = "凶";
    }elseif ($resultNumber >= 11 && $resultNumber <= 15){
      $resultFortune = "小吉";
    }elseif ($resultNumber >= 16 && $resultNumber <= 20){
      $resultFortune = "中吉";
    }elseif ($resultNumber >= 21 && $resultNumber <= 25){
      $resultFortune = "吉";
    }elseif ($resultNumber >= 26 && $resultNumber <= 36){
      $resultFortune = "大吉";
    }else {$resultFortune = "残念";}

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  date_default_timezone_set('Asia/Tokyo'); //日本のタイムゾーンに設定
  print(date('Y-m-d G時 i分 s秒')); //Gは時(24時間単位)、iは分、sは秒

  echo "<br>";

  echo "名前は".$username."です。";
  echo "<br>";

  echo "番号は".$resultNumber."です。";
  echo "<br>";

  echo "結果は".$resultFortune."です。";

