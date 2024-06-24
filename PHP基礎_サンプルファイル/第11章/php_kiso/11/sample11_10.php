<?php
$data = 10;

function f() {
	global $data;
	$data *= 2;
	echo "[関数内で使用]　変数data = {$data} <br>";
}

f();
echo "[関数外で使用]　変数data = {$data} <br>";
?>