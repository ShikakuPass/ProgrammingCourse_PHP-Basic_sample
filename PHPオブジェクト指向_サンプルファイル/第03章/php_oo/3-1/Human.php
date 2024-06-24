<?php
class Human {
	private $name;
	private $age;
	
	public function __construct($n, $a) {
		$this->name = $n;
		$this->age = $a;
	}

	public function introduce() {
		echo "名前 : {$this->name}<br>";
		echo "年齢 : {$this->age}<br>";
	}
}
?>