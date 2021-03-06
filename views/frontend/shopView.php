<?php 
    //lay file layout_trangtrong.php vao day
    $this->layout = "views/frontend/layout_trangtrong.php";
 ?>
<div class="hero-wrap hero-bread" style="background-image: url('assets/frontend/images/bg_6.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-0 bread">Collection</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product</span></p>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section bg-light">
<div class="container-fluid">
	<div class="row">
        
	<?php foreach($data as $rows): ?>
		<div class="col-sm col-md-6 col-lg-3 ftco-animate">
			<div class="product">
				<a href="<?php echo $rows->name; ?>-<?php echo $rows->product_id; ?>.html" class="img-prod"><img class="img-fluid" src="assets/upload/product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>"></a>
				<div class="text py-3 px-3">
					<h3><a href="<?php echo $rows->name; ?>-<?php echo $rows->product_id; ?>.html"><?php echo $rows->name; ?></a></h3>
					<div class="d-flex">
						<div class="pricing">
    						<p class="price"><span><?php echo number_format($rows->price); ?></span></p>
    					</div>
    					<div class="rating">
							<p class="text-right">
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
							</p>
						</div>
					</div>
					<hr>
					<p class="bottom-area d-flex">
						<a href="index.php?controller=cart&action=add&id=<?php echo $rows->product_id; ?>" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
						<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
					</p>
				</div>
			</div>
		</div>
    <?php endforeach; ?>
	</div>
	<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>