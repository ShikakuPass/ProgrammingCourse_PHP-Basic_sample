<?php
class Model {
	public function tasu($x, $y) {
		$result = $x + $y;
		
		$_SESSION["RESULT"] = $result;
	}
}
?>