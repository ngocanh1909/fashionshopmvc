<?php 
	//include file model
	include "models/backend/loginModel.php";
	class loginController extends Controller{
		//ke thua class loginModel
		use loginModel;
		public function index(){
			//hien thi view
			$this->renderHTML("views/backend/login.php");
		}
		public function login(){
			//goi ham model_login
			$data = $this->model_login();
			//print_r($data);
			//kiem tra du lieu
			if(isset($data->email)){
				//dang nhap thanh cong
				$_SESSION["email"] = $data->email;				
			}
			header("location:index.php?area=backend");//<=>index.php?area=backend&controller=home&action=index
		}
	}
 ?>