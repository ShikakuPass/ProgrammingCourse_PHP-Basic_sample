<?php
class ProductDAO {
	private $db;
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function findAll() {
		$list = array();
		
		$con = $this->db->getConnect();
				
		$sql = "SELECT id, name, price FROM Products";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			array_push($list, $record);
		}
		
		$this->db->closeConnect();
		
		return $list;
	}
	
	public function find($id) {
		$product = NULL;
		
		$con = $this->db->getConnect();
				
		$sql = "SELECT id, name, price FROM Products WHERE id = '{$id}'";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		if ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$product = $record;
		}
		
		$this->db->closeConnect();
		
		return $product;
	}
	
	public function regist($product) {
		$con = $this->db->getConnect();
		
		$id = $product["id"];
		$name = $product["name"];
		$price = $product["price"];
				
		$sql = "INSERT INTO Products VALUES('{$id}', '{$name}', {$price})";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		$this->db->closeConnect();
		
		return $result;
	}
	
	public function update($product) {
		$con = $this->db->getConnect();
		
		$id = $product["id"];
		$price = $product["price"];
				
		$sql = "UPDATE Products SET price = {$price} WHERE id = '{$id}'";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		$this->db->closeConnect();
		
		return $result;
	}
	
	public function delete($id) {
		$con = $this->db->getConnect();
		
		$sql = "DELETE FROM Products WHERE id = '{$id}'";
		$result = mysqli_query($con, $sql) or die("SQL文が実行できません。");
		
		$this->db->closeConnect();
		
		return $result;
	}
}
?>