<?php 
	trait categoryModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_category order by category_id desc limit $fromRecord,$recordPerPage");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_category order by category_id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		//edit -> sua ban ghi
		public function model_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_category where category_id=:id");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$name = $_POST["name"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update tbl_category set name=:name where category_id=:id");
			//thuc thi truy van
			$query->execute(array("name"=>$name,"id"=>$id));			
		}
		public function model_do_add(){
			$name = $_POST["name"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into tbl_category set name=:name");
			//thuc thi truy van
			$query->execute(array("name"=>$name));
		}
		public function model_delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("delete from tbl_category where category_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
	
 ?>