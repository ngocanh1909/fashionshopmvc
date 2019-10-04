<?php 
	include "models/frontend/mainModel.php";
	class mainController extends Controller{
		use mainModel;
		public function index(){
			//lay danh sach san pham noi bat
			$hotproduct = $this->hotproduct();//ham nay trong model
			//lay danh sach san pham moi
			$newproduct = $this->newproduct();//ham nay trong model
			$this->renderHTML("views/frontend/mainView.php",array("hotproduct"=>$hotproduct,"newproduct"=>$newproduct));
		}
	}
 ?>