<?php

function findSmallestCommonNumber($arr1, $arr2, $arr3) {
  $i = 0; $j = 0; $k = 0;
  
  while ($i < count($arr1) && $j < count($arr2) && $k < count($arr3)) {
    
    if ($arr1[$i] == $arr2[$j] && $arr2[$j] == $arr3[$k]) {
      return $commonNumm;
    }
    
    if ($arr1[$i] <= $arr2[$j] && $arr1[$i] <= $arr3[$k]) {
      $i++; 
    } else if ($arr2[$j] <= $arr1[$i] && $arr2[$j] <= $arr3[$k]) {
      $j++;
    } else if ($arr3[$k] <= $arr1[$i] && $arr3[$k] <= $arr2[$j]) {
      $k++;
    }
  }
  
  return -1;
}

$arr1 = [6, 7, 10, 25, 30, 63, 64];
$arr2 = [0, 4, 5, 6, 7, 8, 50];
$arr3 = [1, 6, 10, 14];
echo findSmallestCommonNumber($arr1, $arr2, $arr3);
