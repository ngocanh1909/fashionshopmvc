<?php 
	class logoutController{
		public function index(){
			//huy bien session
			unset($_SESSION["email"]);
			//quay tro lai trang backend
			header("location:index.php?area=backend");
		}
	}
 ?>