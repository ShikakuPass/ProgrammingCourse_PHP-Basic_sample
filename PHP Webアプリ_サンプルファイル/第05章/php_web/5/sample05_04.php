<?php
require_once "./../dao/DBConnection.php";
require_once "./../dao/ProductDAO.php";

$db = new DBConnection();
$dao = new ProductDAO($db);

$product = array("id" => "0104", "name" => "ぶどう", "price" => 600);
$result = $dao->update($product);

if ($result === TRUE) {
	echo "レコードを変更しました。<br>";
}
?>