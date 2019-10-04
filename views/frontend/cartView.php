<?php 
    //lay file layout_trangtrong.php vao day
    $this->layout = "views/frontend/layout_trangtrong.php";
 ?>
<div class="hero-wrap hero-bread" style="background-image: url('assets/frontend/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">My Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						    <?php if(isset($_SESSION["cart"])): ?>
                			<?php foreach($_SESSION["cart"] as $product): ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(assets/upload/product/<?php echo $product["img"]; ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $product["name"]; ?></h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$<?php echo number_format($product["price"]); ?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $product["number"]; ?>" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$<?php echo number_format($product["number"]*$product["price"]); ?></td>
						      </tr><!-- END TR-->

						    <?php endforeach; ?>  
							<?php endif; ?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$<?php echo number_format($this->cart_total()); ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$<?php echo number_format($this->cart_total()); ?></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

