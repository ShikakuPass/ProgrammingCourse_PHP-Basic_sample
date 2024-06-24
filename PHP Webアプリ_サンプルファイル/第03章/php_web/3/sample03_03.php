<?php
$con = mysqli_connect("localhost", "root", "root") or die("MySQLに接続できません。");

mysqli_select_db($con, "sample_db") or die("データベースが使用できません。");
mysqli_set_charset($con, "utf8");

$id = "0104";
$name = "ぶどう";
$price = 550;

$sql = "INSERT INTO Products VALUES('{$id}', '{$name}', {$price})";
$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");

if ($result === TRUE) {
	echo "レコードを登録しました。<br>";
}

mysqli_close($con);
?>