<?php
class DBConnection {
	private static $url = "localhost";
	private static $userName = "root";
	private static $password = "root";
	private static $dbName = "sample_db";
	
	private $con;
	
	public function getConnect() {
		if ($this->con == NULL) {
			$this->con = mysqli_connect(
				self::$url,
				self::$userName,
				self::$password
			) or die("MySQLに接続できません。");
			
			mysqli_select_db($this->con, self::$dbName)
				or die("データベースが使用できません。");
			mysqli_set_charset($this->con, "utf8");
		}

		return $this->con;
	}

	public function closeConnect() {
		if ($this->con != NULL) {
			mysqli_close($this->con);
			$this->con = NULL;
		}
	}
}
?>