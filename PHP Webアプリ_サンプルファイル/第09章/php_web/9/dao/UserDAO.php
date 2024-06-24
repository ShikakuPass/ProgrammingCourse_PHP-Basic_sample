<?php
class UserDAO {
	private $db;
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function find($id) {
		$user = NULL;
		
		$con = $this->db->getConnect();
				
		$sql = "SELECT id, name FROM Users WHERE id = '{$id}'";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		if ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$user = $record;
		}
		
		$this->db->closeConnect();
		
		return $user;
	}
}
?>