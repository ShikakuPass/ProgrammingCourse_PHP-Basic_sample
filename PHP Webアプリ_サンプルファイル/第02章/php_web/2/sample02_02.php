<?php
define("FILE_NAME", "data.txt");

$fp = fopen(FILE_NAME, "r");

while (!feof($fp)) {
	$str = fgets($fp);
	echo $str . "<br>";
}

fclose($fp);
?>