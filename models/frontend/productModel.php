<?php 
	trait productModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product order by product_id desc limit $fromRecord,$recordPerPage");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product order by product_id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		//lay tat ca cac ban ghi
		public function model_get_category($fromRecord,$recordPerPage){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by product_id desc limit $fromRecord,$recordPerPage");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total_category(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by product_id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//var_dump($id);
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		public function getCategoryName(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select name from tbl_category where category_id=:id");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
		}
		//lay mot ban ghi
		public function model_detail(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;			
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where product_id=?");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array($id));
			//lay mot ban ghi
			$result = $query->fetch();
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";
			return $result;
		}
	}
	
 ?>