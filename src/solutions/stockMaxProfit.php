<?php

function findMaxProfit($arr) {
  // get 1 & 2 > buy & sell & profit
  $buyPrice = $arr[0];
  $sellPrice = $arr[1];
  $profit = $sellPrice - $buyPrice;

  for($i=1; $i < count($arr); $i++) {
    $tempProfit = $arr[$i] - $buyPrice;

    if ($tempProfit > $profit) {
      $profit = $tempProfit;
    }

    if ($arr[$i] < $buyPrice) {
      $buyPrice = $arr[$i];
    }
  }

  return $profit;
}

echo findMaxProfit([7, 1, 5, 3, 6, 2, 4]);