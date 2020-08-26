<?php

/*課題１　　$name にあなたの名前を代入し、 
　if文で $name があなたの名前だったら 「私は あなたの名前 です」、
　もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/

$name ="Morika Kasahara";

if ($name == "Morika Kasahara") {
 echo "私は" . $name ."です";
} else {
 echo $name ."ではありません";
}

 echo "\n";
 
 //課題２　for文を使って、1から10000までの合計の値を表示してください。
 
 $total = 0;
 
 for ($i = 1; $i <= 10000; $i++){
  $total += $i;
 }
  echo $total;
  
  echo "\n";
  
  /*課題３　$fruits に配列で好きなフルーツを5個代入し、
  foreach文で順番に出力してください。
  */
  
  $fruits = ["パイナップル","ブルーベリー","白桃","みかん","いちご"];
  
  foreach($fruits as $fruit){
   echo $fruit;
   echo "\n";
  }

  /*課題４【応用】 次のプログラムのバグを修正し、
  1から100までの間で5の倍数のみ表示するようにしてみてください。
  */
  
  $start = 1;
  $end = 100;

  for($i = $start ; $i <= $end ; $i++) {
   if($i % 5 == 0){
    echo $i .".";
   }
  }