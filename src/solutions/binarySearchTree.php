<?php
// binarySearchTree
function binarySearchTree($arr, $key): int {
  $low = 0;
  $high = count($arr) - 1;

  while ($low < $high) {
    $mid = $low + (($high-$low)/2);
    
    if($key == $arr[$mid]) {
      return $mid;
    }

    if($key > $arr[$mid]) {
      $low = $mid;
    }

    if($key < $arr[$mid]) {
      $high = $mid;
    }
  }

  return -1;
}

echo binarySearchTree([1, 4, 5, 6, 9, 23], 6);