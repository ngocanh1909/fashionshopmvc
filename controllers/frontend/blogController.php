<?php 
	//include file blogModel de su dung class blogModel
	include "models/frontend/blogModel.php";
	class blogController extends Controller{
		//su dung class blogModel
		use blogModel;		
		public function all(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 15;
			//----
			//phan trang	
			//tinh tong so ban ghi
			$total = $this->model_total();			
			//tinh tong so trang
			$numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lay bien p truyen tu url -> bien nay the hien la dang o may
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class blogModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/blogView.php", array("data"=>$data,"numPage"=>$numPage,"id"=>$id));
		}		
		//chi tiet bai viet
		public function detail(){
			$record = $this->model_detail();
			$this->renderHTML("views/frontend/blogDetailView.php",array("record"=>$record));
		}
	}
 ?>