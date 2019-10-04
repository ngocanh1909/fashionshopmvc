<?php 
	class headerController extends Controller{
		public function index(){
			$this->renderHTML("views/frontend/headerView.php");
		}
	}
 ?>