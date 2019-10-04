<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.html">Modist</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="shop.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown04">
	              	<a class="dropdown-item" href="shop.html">Tất cả sản phẩm</a>
	                <a class="dropdown-item" href="index.php?controller=product&action=category&id=3">Váy</a>
	              </div>
              </li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <?php 
				$number = 0;
				$number = isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0;
			  ?>
	          <li class="nav-item cta cta-colored"><a href="index.php?controller=cart" class="nav-link"><span class="icon-shopping_cart"></span> [<?php echo $number; ?>]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->