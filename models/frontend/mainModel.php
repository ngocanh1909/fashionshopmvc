<?php 
	trait mainModel{
		//san pham noi bat
		public function hotproduct(){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where hotproduct=1 order by product_id desc limit 0,6");			
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
			//san pham moi
		public function newproduct(){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product order by product_id desc limit 0,4");			
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>