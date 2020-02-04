<?php

// To find subsequent array eg: 1,4

function funFindSubArray($main,$sub,$totalMain,$totalSub) {

  $isSubArray = 0;

  for($i=0;$i<$totalMain;$i++) {
    $flag = 0;
    for ($j=0; $j < $totalSub; $j++) {

      if($main[$i] == $sub[$j]) {
        $flag = 1;
        $isSubArray += 1;
      break;
      }
    }

    // For testing purpose
    // echo "Flag - ". $flag."<br>";
    // echo "isSubArray - ". $isSubArray."<br><br>";

    if($flag == 1 && $totalSub == $isSubArray) {
    break;
    }
  }

  return $isSubArray;  
}

$main =  array(20, 7, 8, 10, 2, 5, 6);
$sub = array(20,7,1);

$result = funFindSubArray($main,$sub,count($main),count($sub));

if($result){
  echo "Sub array elements found in main array <br>";
  echo $result." - elements are matching";
}
else 
  echo "Sub array elements not found in main array";

// echo $isSubArray;
