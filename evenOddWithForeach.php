<?php
$number = array(2,5,7,8,1,3,10);
// array(4) { [0]=> int(5) [1]=> int(7) [2]=> int(1) [3]=> int(3)}
// array(3) { [0]=> int(2) [1]=> int(8) [2]=> int(10)}
$even = array();
$odd = array();

foreach ($number as $item){
    if($item % 2 == 0){
        array_push($even , $item);
    }else{
        array_push($odd , $item);
    }
}
var_dump($odd);
echo "<br>";
var_dump($even);
?>