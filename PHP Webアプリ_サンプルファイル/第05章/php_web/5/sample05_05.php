<?php
require_once "./../dao/DBConnection.php";
require_once "./../dao/ProductDAO.php";

$db = new DBConnection();
$dao = new ProductDAO($db);

$id = "0104";
$result = $dao->delete($id);

if ($result === TRUE) {
	echo "レコードを削除しました。<br>";
}
?>