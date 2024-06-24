<?php
require_once "./../dao/DBConnection.php";
require_once "./../dao/ProductDAO.php";

$db = new DBConnection();
$dao = new ProductDAO($db);

$list = $dao->findAll();

foreach ($list as $product) {
	echo "[商品ID] : {$product["id"]} <br>";
	echo "[商品名] : {$product["name"]} <br>";
	echo "[単　価] : {$product["price"]} <br>";
	echo "<br>";
}
?>