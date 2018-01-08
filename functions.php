<?php
/******* free to use, free to sell, free to change, per developer/owner *****/
/***** MIT License **********************************************************/
function nonce_calculator($difficulty){
  $t1 = time();
  $a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $string = d256($a);
  echo "<br>The original string is:: <br>{$string}<br>";
  echo "<br><h2>Original Hash:: " . $hash1 = hash("sha1",$string) . "</h2>";
  $hash = $hash1;
  $zero_string = "";
  for($j=$difficulty;$j>0;$j--){
    $zero_string .= "0";
  }
  for($i=0;$i<100000000;$i++){
    if(substr($hash,0,$difficulty) === $zero_string){
      echo "<br>Time to success: " . (time() - $t1) . " seconds";
      die("<br><h1>Success at integer: {$i}</h1>Your hash is: {$hash}");
    }
    $hash = hash("sha1",$hash . $i);
    $denominator = ((int)("1".$zero_string)) - 1;
    if(is_int($i/$denominator)) echo "<br>Your hash at integer: {$i}, is: {$hash}";
  }

  echo "<h2> Your original hash was:: {$hash1}";
}


function d256($a){
  $l = strlen($a) - 1;
  $s = str_split($a);
  $x = "";
  for($i=0;$i<256;$i++){
    $j = random_int(0,$l);
    shuffle($s);
    $x .= $s[$j];
  }
  return $x;
}
