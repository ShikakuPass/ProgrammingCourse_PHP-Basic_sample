<?php
/***** strcmp関数の使い方 *****/
echo (strcmp("ABC", "XYZ") === 0 ? "等しい" : "等しくない") . "<br>";
echo (strcmp("ABC", "ABC") === 0 ? "等しい" : "等しくない") . "<br>";
echo (strcmp("ABC", "abc") === 0 ? "等しい" : "等しくない") . "<br>";

/***** strlen関数の使い方 *****/
echo "文字列の長さ = " . strlen("ABC") . "<br>";
echo "文字列の長さ = " . strlen("あいうえお") . "<br>";

/***** substr関数の使い方 *****/
echo "「New York」の2文字目から4文字分 = " . substr("New York", 2, 4) . "<br>";
echo "「New York」の2文字目以降全て = " . substr("New York", 2) . "<br>";

/***** str_replace関数の使い方 *****/
$str1 = "one two three four five";
echo "スペースを「*」に変換 = " . str_replace(" ", "*", $str1) . "<br>";

/***** trim関数の使い方 *****/
$str2 = " Hello PHP ";
echo "前後のスペースを除去前 = 「" . $str2 . "」<br>";
echo "前後のスペースを除去後 = 「" . trim($str2) . "」<br>";
?>