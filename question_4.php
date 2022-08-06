<?php

$array = [77,5,5,22,13,55,97,4,796,1,0,9];


for($i=0; $i < count($array); $i++){
    for($j=0; $j < count($array)-$i-1; $j++){
        if( $array[$j] > $array[$j+1]){
            $step = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $step;
        }
    }
}
echo "正序排列 : ";
print_r($array);
?>