<?php
class Login {
	public function execute($request) {
		$id = $request["ID"];
		
		$db = new DBConnection();
		$dao = new UserDAO($db);
		
		$result = $dao->find($id);
		
		if ($result === NULL) {
			session_destroy();
			$url = "./view/start_up.php";
		} else {
			$_SESSION["USER"] = $result;
			$url = "./view/success.php";
		}
		
		return $url;
	}
}
?>