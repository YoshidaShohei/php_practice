<?php
echo 'hello php!';
echo "\n";
// 課題1スタート

// 変数 $a　に 3 を代入
$a = 3;

// 変数 $b に 7 を代入
$b = 7;

// 変数 $a と $b を足した値を $total に代入する。
$total = $a + $b;

// 変数 $total を出力する
echo $total;
// =>> 10 と表示される
echo "\n";
// 課題2スタート

// 変数 $array_month に配列 [1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月] を代入する
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

// => $array から 8月 のみを取り出して表示
echo $array_month[7];
//
echo "\n";
//課題3スタート

$hello = "Hello";
$name = "Shohei";
$world = "'s World!";

//上記を連結
echo $hello . $name . $world;
echo "\n";

// 課題4スタート
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

// 課題5スタート

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
echo "\n";

// 課題1
$name = "吉田昌平";

// もし $name が 吉田昌平 なら「私は あなたの名前 です」と表記
//  もしそれ意外なら「あなたの名前ではありません」と表記
if ($name = "吉田昌平") {
    echo "私は 吉田昌平 です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

// 課題2
$total = 0;
echo $total;
// => 0 と表示される

// $iが0から始まり、$iが10,000以下の間繰り返し処理を行う。
for ($i = 0; $i <= 10000; $i++) {
 $total += $i;
}
echo $total;
// 1~10000までの合計値が表示される。
echo "\n";

// 課題3
$fluits = array("apple", "banana", "peach", "blueberry", "orange");
// $fluits から一つずつ要素を取り出し、$fluitsに代入。

foreach($fluits as $fluits){
    echo $fluits;
    echo "\n";
}

// 課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i / 5 == 0) {
    echo $i;
  }
}