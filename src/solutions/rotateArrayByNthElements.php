<?php

// rotateArrayByNthElements
function fun($arr, $key): Array {
  if ($key > 0) {
    $result = moveFromLastToFirst($arr, $key);
  } else {
    $result = moveFromFirstToLast($arr, $key);
  }
  return $result;
}

function moveFromLastToFirst($arr, $key): Array {
  $tempArr = [];
  echo "count".count($arr);
  for($i = count($arr)-$key; $i <= count($arr); $i++){
	echo ">".$i;
    $tempArr[] = $arr[$i];
    unset($arr[$i]);
  }

  return array_merge($tempArr, $arr);
}

function moveFromFirstToLast($arr, $key): Array {
  $tempArr = [];
  for($i = 0; $i < $key*-1; $i++){
  echo ">".$i;
    $tempArr[] = $arr[$i];
    unset($arr[$i]);
  }

  return array_merge($arr, $tempArr);
}


$result = fun([1, 2, 3, 4, 5], 2); // [4, 5, 1, 2, 3]	
foreach ($result as $ele) {
   echo $ele . "<br>";
}

echo "<br>" ."<hr>". "<br>";

$result = fun([1, 10, 20, 0, 59, 86, 32, 11, 9, 40], -3); // [1, 10, 20, 0, 59, 86, 32, 11, 9, 40]	
foreach ($result as $ele) {
  echo $ele . "<br>";
}