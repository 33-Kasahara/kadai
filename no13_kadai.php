<?php

//課題１　引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($atai){
 $result = $atai * 2;
 return $result;
}

 echo double(25);

 echo "\n";
 
 //課題２　$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
 function plus($a,$b){
     $result = $a + $b;
     return $result;
 }
 
 echo plus(55,40);
 
 echo "\n";
 
 /*課題３　$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
 その要素をすべてかけた結果を返す関数を作成してください
 */
 $array = [1,3,5,7,9];
 function all($arr){
     $result = 1;
       foreach($arr as $a){
            $result *= $a;
        }
    return $result;
}
echo all($array);

echo "\n";

/*課題４　【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を
実装しようとしています。途中の部分を完成させてください。
*/

$array = [1,8,6,5,9,7,15];

function max_array($arr){
    $max_namber = $arr[0];
    foreach($arr as $a){
//ここから追加した関数
        if($max_namber < $a){ 
        //$arr[0]より$aが大きければ、$aの値に$max_namber　を代入する
            $max_namber = $a;
        }
        
    }
    return $max_namber;
}
echo max_array($array);

echo "\n";

//課題５　次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags  …　指定した文字列からHTMLタグ及びPHPタグを取り除く
$text = '<h1>取り除くのはh1とp。brは残す</h1><br><p>使用例はイメージできない</p>';
echo strip_tags($text,'<br>');
echo "\n";

//array_push　…　一つ以上の要素を配列の最後に追加する
$array = ['PS','PS2','PS3','PSP'];
    array_push($array,'64','wii','swich');
    print_r($array);

echo "\n";

//array_merge　…　配列の要素の最後に、ひとつまたは複数の配列を結合する
$array = ['PS','PS2','PS3','PSP'];
$new_array = ['PS4','PS4pro','PS5'];
    $new = array_merge($array,$new_array);
    print_r($new);

echo "\n";

/*time,mktime　 …　タイムスタンプを取得する
  date          …　日付・時刻を書式化する
  
      本日と予約日を比較し、予約日まで1日を切った場合は予約までの時間を
      1日以上ある場合は予約までの日数を表示してみる
*/
date_default_timezone_set('Asia/Tokyo');
$time = time();
$time2 = mktime(14,30,0,9,1,2020);
$today = date('y/m/d G:i',$time);
$rsv = date('y/m/d G:i',$time2);
$date = $time2-$time;

echo "本日は" . $today ."です。";
echo "\n";
echo "予約日は" .$rsv ."です。";
echo "\n";

    if ( $date < 86000){
      echo "予約まで" . floor($date/3600) ."時間です";
    } else {
      echo "予約まで" . ceil($date/86400)."日です";
    } 
echo "\n";

