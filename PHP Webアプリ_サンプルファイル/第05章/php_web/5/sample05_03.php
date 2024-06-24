<?php
require_once "./../dao/DBConnection.php";
require_once "./../dao/ProductDAO.php";

$db = new DBConnection();
$dao = new ProductDAO($db);

$product = array("id" => "0104", "name" => "ぶどう", "price" => 550);
$result = $dao->regist($product);

if ($result === TRUE) {
	echo "レコードを登録しました。<br>";
}
?>