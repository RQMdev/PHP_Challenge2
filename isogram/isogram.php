<?php
/*
* Check if a String is an Isogram.
* Same Occurency of each letter in the word.
*
*
*/
function isIsogram(string $str){
  $result = true;
  $str = strtolower($str);
  $toIgnore = ["45", "227", "32"];
  $strLength = strlen($str);
  $letterOccurence= [];

  // Set the Array.
  for ($i = 0; $i < $strLength; $i++){
    $value = ord($str[$i]);
    $letterOccurence[$value] = 0;
  }


  //Increment the Array.
  for ($i = 0; $i < $strLength; $i++){
    $value = ord($str[$i]);
    $letterOccurence[$value] += 1;
  }

  // Ignore(unset) the Char set in $toIgnore.
  foreach ($toIgnore as $value){
    if (array_key_exists($value, $letterOccurence)){
      unset($letterOccurence[$value]);
    }
  }

  // Check if every Occurence are the same.
  $firstValue = current($letterOccurence);
    foreach ($letterOccurence as $value) {
        if ($firstValue !== $value) {
            $result = false;
        }
    }

  return $result;
}
