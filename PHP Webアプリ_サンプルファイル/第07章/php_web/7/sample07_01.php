<?php
session_start();

$count = 0;

if (isset($_SESSION["COUNT"])) {
	$count = $_SESSION["COUNT"];
}

$count++;
$_SESSION["COUNT"] = $count;
?>

カウント値：<?= $count ?><br>
<a href="sample07_01.php">カウントアップ</a>