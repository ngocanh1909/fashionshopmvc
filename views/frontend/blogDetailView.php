
<?php 
    //lay file layout_trangtrong.php vao day
    $this->layout = "views/frontend/layout_trangtrong.php";
 ?>
 <div class="hero-wrap hero-bread" style="background-image: url('assets/frontend/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Blog Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Blog Single</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3"><?php echo $record->name; ?></h2>
            <?php echo $record->content; ?>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
		