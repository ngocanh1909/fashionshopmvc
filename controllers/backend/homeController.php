<?php 
	class homeController extends Controller{
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function index(){
			$this->renderHTML("views/backend/home.php");
		}
	}
 ?>