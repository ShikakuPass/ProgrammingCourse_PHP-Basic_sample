<?php
class Human {
	public $name;
	public $age;

	public function introduce() {
		echo "名前 : {$this->name}<br>";
		echo "年齢 : {$this->age}<br>";
	}

	public function walk() {
		echo "歩いています。<br>";
	}

	public function eat() {
		echo "食事をしています。<br>";
	}
}
?>