<?php
$data = 10;

function f() {
	$GLOBALS["data"];
	$GLOBALS["data"] *= 2;
	echo "[関数内で使用]　変数data = {$GLOBALS["data"]} <br>";
}

f();
echo "[関数外で使用]　変数data = {$data} <br>";
?>