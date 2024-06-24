<?php
class Product {
	public $name;
	public $price;
	public static $tax;
	
	public function __construct($n, $p, $t) {
		$this->name = $n;
		$this->price = $p;
		self::$tax = $t;
	}
	
	public function displayInfo() {
		echo "商品名 : " . $this->name . "<br>";
		echo "単価 : " . $this->price . "<br>";
		echo "消費税 : " . self::$tax . "<br>";
	}
}
?>