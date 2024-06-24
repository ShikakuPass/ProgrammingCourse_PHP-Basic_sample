<?php
class Logout {
	public function execute($request) {
		$url = "./view/start_up.php";
		session_destroy();
		
		return $url;
	}
}
?>