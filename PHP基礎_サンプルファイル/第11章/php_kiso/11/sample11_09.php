<?php
$data = 10;

function f() {
	$data = 100;
	echo "関数内の変数data = {$data} <br>";
}

echo "関数外の変数data = {$data} <br>";
f();
echo "関数外の変数data = {$data} <br>";
?>