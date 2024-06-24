<?php
require_once "TV.php";

class Mobile extends TV {
	public $telNo;
	
	public function talk() {
		echo "電話番号：{$this->telNo}<br>";
		echo "現在、携帯電話で会話中です。<br>";
	}
}
?>