<?php
	trait cartModel{		
		public function cart_add($id){
		    if(isset($_SESSION['cart'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = db::get_one("select * from tbl_product where id=$id");
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from tbl_product where product_id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'img' => $product->img,
		            'number' => 1,
		            'price' => $product->price
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($id){
		    unset($_SESSION['cart'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}	
?>