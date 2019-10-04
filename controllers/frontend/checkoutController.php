<?php 
	include "models/frontend/checkoutModel.php";
	class checkoutController extends Controller{
		use checkoutModel;
		public function index(){
			$this->renderHTML("views/frontend/checkoutView.php");
		}
		public function bill(){
			//goi ham model_bill trong checkoutModel
			$this->model_bill();
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
	}
 ?>