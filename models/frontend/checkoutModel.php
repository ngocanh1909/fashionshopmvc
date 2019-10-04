<?php 
	trait checkoutModel{
		public function model_bill(){
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//---
			$conn = Connection::getInstance();
			//---
			//insert ban ghi vao tbl_customer, lay customer_id vua moi insert
			$query = $conn->prepare("insert into tbl_customer set fullname=:fullname, email=:email, address=:address,phone=:phone");
			$query->execute(array("fullname"=>$fullname,"email"=>$email,"address"=>$address,"phone"=>$phone));
			//lay id vua moi insert
			$customer_id = $conn->lastInsertId();
			//---
			//---
			//insert ban ghi vao tbl_order, lay order_id vua moi insert
			$query = $conn->prepare("insert into tbl_order set customer_id=:customer_id, create_at=now()");
			$query->execute(array("customer_id"=>$customer_id));
			//lay id vua moi insert
			$order_id = $conn->lastInsertId();
			//---
			//duyet cac ban ghi trong session array de insert vao tbl_order_detail
			foreach($_SESSION["cart"] as $product){
				$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id, price=:price, number=:number");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>$product["price"],"number"=>$product["number"]));
			}
			//xoa gio hang
			unset($_SESSION["cart"]);
		}
	}
 ?>