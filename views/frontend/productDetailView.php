<?php 
    //lay file layout_trangtrong.php vao day
    $this->layout = "views/frontend/layout_trangtrong.php";
 ?>
<div class="hero-wrap hero-bread" style="background-image: url('assets/frontend/images/bg_6.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-0 bread">Product Single</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="home.html">Home</a></span> <span class="mr-2"><a href="home.html">Product</a></span> <span>Product Single</span></p>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section bg-light">
<div class="container">
	<div class="row">
		<div class="col-lg-6 mb-5 ftco-animate">
			<a href="assets/upload/product/<?php echo $record->img; ?>" class="image-popup"><img src="assets/upload/product/<?php echo $record->img; ?>" class="img-fluid" alt="<?php echo $record->name; ?>"></a>
		</div>
		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
			<h3><?php echo $record->name; ?></h3>
			<p class="price"><span><?php echo number_format($record->price); ?></span></p>
			<?php echo $record->description; ?>
  			<p><a href="index.php?controller=cart&action=add&id=<?php echo $record->product_id; ?>" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
		</div>
	</div>
</div>
</section>