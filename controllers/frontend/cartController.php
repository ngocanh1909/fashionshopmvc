<?php 
	include "models/frontend/cartModel.php";
	class cartController extends Controller{
		use cartModel;
		//ham tao su dung de kiem tra va khoi tao gia tri
		public function __construct(){
			//neu session cart chua ton tai thi khoi tao no
			if(!isset($_SESSION["cart"]))
				$_SESSION["cart"] = array();
		}
		//ham them moi san pham vao gio hang
		public function add(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham add tu model
			$this->cart_add($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//hien thi gio hang
		public function index(){
			$this->renderHTML("views/frontend/cartView.php");
		}
		//xoa phan tu khoi gio hang
		public function delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham cart_delete tu cartModel
			$this->cart_delete($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//xoa toan bo gio hang
		public function destroy(){
			//goi ham cart_destroy tu cartModel
			$this->cart_destroy();
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//cap nhat so luong san pham
		public function update(){
			//duyet cac phan tu trong session array
			foreach($_SESSION["cart"] as $product){
				$quantity = "product_".$product["id"];
				$number = $_POST[$quantity];
				//goi ham cart_update tu cartModel
				$this->cart_update($product["id"], $number);
			}
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
	}
 ?>