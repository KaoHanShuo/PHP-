<?php
header("Content-Type:text/html; charset=utf-8");


$old_string = "人易科技:上 機 測 驗 - 演算法";
echo "1." . $new_string_one  = str_replace(":", "：", $old_string);
echo "<br>";
$string1 = str_replace(" ", "", $new_string_one);

$string2 = str_split($string1);
$end = array_search("-", $string2);
$start = array_search(":", str_split($old_string));
$string3 = substr_replace($string1, " ", $end, 0);
$new_string_two = substr_replace($string3, " ", $end+2, 0);
echo "2." . $new_string_two;
echo "<br>";

echo "3." . $new_string_three = substr($string3, $start+3, $end-$start-2);

?>