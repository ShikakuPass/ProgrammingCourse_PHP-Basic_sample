<?php
$fruits = array("みかん", "りんご", "メロン");

/***** list関数の使い方 *****/
list($orange, $apple, $melon) = $fruits;
echo "{$orange} <br>";
echo "{$apple} <br>";
echo "{$melon} <br>";

/***** in_array関数の使い方 *****/
echo (in_array("みかん", $fruits) === TRUE ? "みかんはあります。" : "みかんはありません。") . "<br>";
echo (in_array("もも", $fruits) === TRUE ? "ももはあります。" : "ももはありません。") . "<br>";

/***** array_push関数の使い方 *****/
array_push($fruits, "ぶどう", "いちご");
echo "<pre>";
print_r($fruits);
echo "</pre>";

/***** array_unshift関数の使い方 *****/
array_unshift($fruits, "もも", "ブルーベリー");
echo "<pre>";
print_r($fruits);
echo "</pre>";

/***** array_pop関数の使い方 *****/
$bottomData = array_pop($fruits);
echo "末尾から取り出したデータ = {$bottomData} <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

/***** array_shift関数の使い方 *****/
$topData = array_shift($fruits);
echo "先頭から取り出したデータ = {$topData} <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
?>