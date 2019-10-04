<?php 
	trait productModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product order by product_id desc limit $fromRecord,$recordPerPage");
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
			$query = $conn->prepare("select * from tbl_product order by product_id desc");
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
			$query = $conn->prepare("select * from tbl_product where product_id=:id");
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
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$price = $_POST["price"];
			$hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
			//----------
			//update ban ghi
			$conn = Connection::getInstance();
			//--------
			$result = $conn->prepare("update tbl_product set name=:name, category_id=:category_id,description=:description,content=:content,price=:price,hotproduct=:hotproduct where product_id=:id");
			$result->execute(array("name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"price"=>$price, "hotproduct"=>$hotproduct ,"id"=>$id));
			//----------
			//neu user chon anh
			//doi tuong $_FILES su dung de thao tac file
			/*
				$_FILES["img"]["name"] -> ten anh
				$_FILES["img"]["ext"] -> duoi anh
				$_FILES["img"]["tmp_name"] -> duong dan anh tam thoi
			*/
			if($_FILES["img"]["name"] != ""){
				//--------
				//lay anh cu de xoa
				$old_img = $conn->prepare("select img from tbl_product where product_id=:id");
				$old_img->setFetchMode(PDO::FETCH_OBJ);
				$old_img->execute(array("id"=>$id));
				$get_old_img = $old_img->fetch();
				if(isset($get_old_img->img)){
					//xoa anh cu
					unlink("assets/upload/product/".$get_old_img->img);
				}
				//--------
				$img = time()."_".$_FILES["img"]["name"];
				//--------
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "assets/upload/product/$img");
				//--------
				//update lai field img
				$result = $conn->prepare("update tbl_product set img=:img where product_id=:id");
				$result->execute(array("img"=>$img,"id"=>$id));
				//--------
			}
			//----------
		}
		public function model_do_add(){
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$price = $_POST["price"];
			$hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
			$img = "";
			if($_FILES["img"]["name"] != ""){
				$img = time()."_".$_FILES["img"]["name"];
				//--------
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "assets/upload/product/$img");
			}
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$result = $conn->prepare("insert into tbl_product set name=:name, category_id=:category_id,description=:description,content=:content,price=:price,hotproduct=:hotproduct,img=:img");
			$result->execute(array("name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"price"=>$price, "hotproduct"=>$hotproduct ,"img"=>$img));
		}
		public function model_delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//--------
			//lay anh cu de xoa
			$old_img = $conn->prepare("select img from tbl_product where product_id=:id");
			$old_img->setFetchMode(PDO::FETCH_OBJ);
			$old_img->execute(array("id"=>$id));
			$get_old_img = $old_img->fetch();
			if(isset($get_old_img->img)){
				//xoa anh cu
				unlink("assets/upload/product/".$get_old_img->img);
			}
			//--------
			//chuan bi cau truy van
			$query = $conn->prepare("delete from tbl_product where product_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
	
 ?>