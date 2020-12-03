<?php
error_reporting(-1);
ini_set("display_errors", 1);

$str="abcdeef";

function longestLength($str){
  $strArr=str_split($str);
  global $finalArr;
  $arr=[];
  $tempArr=[];
  for($i=0; $i<=count($strArr)-1; $i++){
    if(array_search($strArr[$i], $tempArr)== FALSE){
      $tempArr[]=$strArr[$i];
    } elseif(array_search($strArr[$i], $tempArr)!= FALSE){
      $x=array_search($strArr[$i], $tempArr);
      $y=array_splice($tempArr, $x, 0);
      if(count($arr)<count($tempArr)){
        $arr=$tempArr;
      }
      $tempArr=[];
    }
  }return $arr;
};
print_r(longestLength($str));

?>