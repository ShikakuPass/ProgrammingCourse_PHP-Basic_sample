<?php
require_once "UserException.php";

$x = 10;
$y = 0;

try {
	if ($y === 0) {
		throw new UserException("０で割れないよ！");
	}
	
	echo ($x / $y) . "<br>";
} catch (UserException $e) {
	echo $e->getMessage() . "<br>";
} finally {
	echo "終了";
}
?>