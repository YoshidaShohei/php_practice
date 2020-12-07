<?php
echo 'hello php!';
echo "\n";
?>

<?php
// 1〜$max までを足して結果を返す関数
function sum($max) {
    $result = 0;

    // $i は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}

// 関数を実行
echo sum(100);
echo "\n";
?>

<?php
// 課題1
function a($max) {
  $result = $max * 2;
  return $result;
}
// 関数実行
echo a(100) . "\n";
// =>200と表示される。
?>

<?php
// 課題2
function b($a, $b){
    $result = $a + $b;
    return $result;
}
// 関数実行
echo b(3, 5) . "\n";
?>

<?php
// 課題3 ※聞きたい！！！
function c($arr){
    $total = 1;
    foreach($arr as $value){
        $total *= $value;
    }
    return $total;
}
echo c(array(1, 3, 5, 7, 9)) . "\n";
?>

<?php
// 課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 
 if ($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
    
echo max_array(array(1, 3, 5, 7, 9)) . "\n";
?>

<?php
// 課題5 strip_tags

$text = '<p>Test paragraph.</p>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p>');
?>

<?php
// 課題5 array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "peach");
print_r($stack) . "\n";
?>

<?php
// 課題5 array_merge
$array1 = array("color" => "red", 2, 3, "color" => "green");
$array2 = array(5, "color" => "purple", 7, 8);

$result = array_merge($array1, $array2);
print_r($result) . "\n";
?>

<?php
// 課題5 time,mktime
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+2 week')) ."\n";
?>

<?php
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 12, 7, 2020);
echo $timestamp . "\n"
?>