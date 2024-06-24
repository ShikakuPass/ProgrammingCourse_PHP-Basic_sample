<?php
session_start();

$count = 0;

if (isset($_SESSION["COUNT"])) {
	$count = $_SESSION["COUNT"];
}

$count++;
$_SESSION["COUNT"] = $count;

if ($count >= 10) {
	session_destroy();
}
?>

カウント値：<?= $count ?><br>
<a href="sample07_02.php">カウントアップ</a>