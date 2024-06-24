<?php
require_once "Human.php";

class Yamada extends Human {
	public function playBaseball() {
		echo "野球をしています。<br>";
	}
	
	public function eat() {
		echo "ラーメンを食べました。<br>";
	}
}
?>