<?php

$a = [77,5,5,22,13,55,97,4,796,1,0,9];
$b = [0,1,2,3,4,5,6,7,8,9];

foreach($a as $key => $val){
    if( in_array($val , $b) ){
        $same = array_search($val , $b);
        $c[] = $b[$same];
    }
}
echo "陣列c : ";
print_r($c);
echo "<br>";

$d = $a;
foreach($d as $key => $val){
    if( in_array($val , $c) ){
        $same = array_search($val , $d);
        unset($d[$same]);
    }
}
echo "陣列d : ";
print_r($d);
echo "<br>";

$e = $a;
foreach($b as $key => $val){
    if( !in_array($val , $c) ){
        array_push($e, $val);
    }
}
echo "陣列e : ";
print_r($e);
?>