<?php
class Human {
	private $name;
	private $age;
	
	public function setName($n) {
		$this->name = $n;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setAge($a) {
		$this->age = $a;
	}
	
	public function getAge() {
		return $this->age;
	}
}
?>