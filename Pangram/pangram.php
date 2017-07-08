<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function isPangram($string)
{
  if ($string == ''){
    return false;
  }

  $result = true;
  $letterOccurence = [];
  $string = strtolower($string);
  $stringLength = strlen($string);
  $alphabetAscii = ["97","98","99","100","101","102","103","104","105","106","107","108",
  "109","110","111","112","113","114","115","116","117","118","119","120","121","122"];

  // Set the Array.
  for ($i = 0; $i < $stringLength; $i++){
    $value = ord($string[$i]);
    $letterOccurence[$value] = true;
  }

  // Check if every alphabetic Char is present.
    foreach ($alphabetAscii as $value) {
        if (!array_key_exists($value, $letterOccurence)) {
            $result = false;
        }
    }
    return $result;
}

// $str = "abcdefghijklmnopqrstuvwxyz";
// print(isPangram($str));
