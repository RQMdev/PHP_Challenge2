<?php
$str = "Hjelmqvist-Gryb-Zock-Pfund-Wax";

function isIsogram(string $str){
  $result = true;
  $toChange = ["-"];
  $changeInto = [""];
  $string = str_replace($toChange, $changeInto, $str);
  $stringLength = strlen($string);


  for ($j = 0; $j < $stringLength; $j++){
    for ($k = $stringLength - 1; $k > 0 + $j; $k--){
      $diff = strcasecmp($string[$j], $string[$k]);
      if( $diff == 0 && $j != $k){
        $result = false;
      }
    }
  }

  // foreach (count_chars($data, 1) as $i => $val){
  //   if ($val > 1){
  //     result = false;
  //   }
  // }

  return $result;
}




print_r(isIsogram($str));
