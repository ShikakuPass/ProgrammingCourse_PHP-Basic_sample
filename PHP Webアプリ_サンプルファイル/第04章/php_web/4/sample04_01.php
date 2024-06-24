<?php
$con = mysqli_connect("localhost", "root", "root") or die("MySQLに接続できません。");

mysqli_select_db($con, "sample_db") or die("データベースが使用できません。");
mysqli_set_charset($con, "utf8");

mysqli_query($con, "SET AUTOCOMMIT=0");
mysqli_query($con, "BEGIN");

$sql1 = "UPDATE Products SET price = 400 WHERE id = '0102'";
$result1 = mysqli_query($con, $sql1) or die("SQL文が実行できません。");

$sql2 = "UPDATE Products SET price = 600 WHERE id = '0103'";
$result2 = mysqli_query($con, $sql2) or die("SQL文が実行できません。");

if ($result1 === TRUE && $result2 === TRUE) {
	mysqli_query($con, "COMMIT");
	echo "正常にレコードを変更しました。<br>";
} else {
	mysqli_query($con, "ROLLBACK");
	echo "レコードの変更に失敗しました。<br>";
}

mysqli_close($con);
?>