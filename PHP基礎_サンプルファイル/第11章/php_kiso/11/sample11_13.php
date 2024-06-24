<?php
function f(&$data) {
	$data += 10;
	echo "関数内の変数data = {$data} <br>";
}

$data = 10;
f($data);

echo "関数外の変数data = {$data} <br>";
?>