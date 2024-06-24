<?php
require_once "Product.php";

$p1 = new Product("りんご", 300, 0.08);
$p2 = new Product("みかん", 200, 0.08);
$p3 = new Product("ぶどう", 400, 0.08);

$p1->displayInfo();
$p2->displayInfo();
$p3->displayInfo();

Product::$tax = 0.1;

echo "<br>";

$p1->displayInfo();
$p2->displayInfo();
$p3->displayInfo();
?>