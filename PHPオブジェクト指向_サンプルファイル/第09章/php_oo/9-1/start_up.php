<?php
$x = 10;
$y = 0;

try {
	if ($y === 0) {
		throw new Exception("０で割れないよ！");
	}
	
	$result = $x / $y;
	echo $result . "<br>";
} catch (Exception $e) {
	echo $e->getMessage() . "<br>";
} finally {
	echo "終了";
}
?>