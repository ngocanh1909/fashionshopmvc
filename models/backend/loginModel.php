<?php 
	trait loginModel{
		public function model_login(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//goi ham ma hoa password
			$password = md5($password);
			//lay bien ket noi de thuc hien truy van csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select email from tbl_user where email=:email and password=:password");
			//set kieu truy van
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van co truyen danh sach bien
			$query->execute(array("email"=>$email,"password"=>$password));
			//lay mot ban ghi
			$result = $query->fetch();
			return $result;
		}
	}
 ?>