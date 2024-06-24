<?php
require_once "Human.php";

class Sato extends Human {
	public function cook() {
		echo "料理をしています。<br>";
	}
	
	public function eat() {
		echo "カレーを食べました。<br>";
	}
}
?>