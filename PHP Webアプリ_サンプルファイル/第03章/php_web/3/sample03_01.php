<?php
$con = mysqli_connect("localhost", "root", "root") or die("MySQLに接続できません。");

mysqli_select_db($con, "sample_db") or die("データベースが使用できません。");
mysqli_set_charset($con, "utf8");

$sql = "SELECT id, name, price FROM Products";
$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");

$rows = mysqli_num_rows($result);
echo "レコード数は{$rows}件です。<br><br>";

while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "[商品ID] : {$record["id"]} <br>";
	echo "[商品名] : {$record["name"]} <br>";
	echo "[単　価] : {$record["price"]} <br>";
	echo "<br>";
}

mysqli_free_result($result);

mysqli_close($con);
?>