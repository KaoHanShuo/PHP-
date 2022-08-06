<?php

$array = [0,1,2,3,4,5,6,7,8,9];

foreach($array as $key => $value){
    if( $value%2 == 0 ){
        $even[] = $value;
    }else{
        $odd[] = $value;
    }
}

echo "1." . array_sum($odd)-array_sum($even);
echo "<br> 2.奇數值";
print_r($odd);
echo "<br> 3.偶數值";
print_r($even);
?>