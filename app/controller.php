<?php 
	class Controller{
		public $layout = "";
		public $view = "";
		//ham xuat html ra view
		public function renderHTML($fileView, $data = NULL){
			//su dung ham extract de bien key cua array thanh ten bien
			if($data != NULL)
				extract($data);
			//doc noi dung cua file $fileView day vao mot bien
			ob_start();
			include $fileView;
			$this->view = ob_get_contents();
			ob_get_clean();
			//kiem tra neu file layout co du lieu thi load file layout
			if(file_exists($this->layout))
				include $this->layout;
			else
				//xuat bien view len man hinh
				echo $this->view;
		}
		//xac thuc dang nhap
		public function authentication(){
			if($_SESSION["email"] == NULL)
				header("location:index.php?area=backend&controller=login");
		}
	}
 ?>