<!DOCTYPE html>
<html lang="vi">
  <head>
    <title>Modist - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/animate.css">
    
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/frontend/css/aos.css">

    <link rel="stylesheet" href="assets/frontend/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/frontend/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend/css/icomoon.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
  </head>
  <body>

	<!-- header -->
		<?php
			//load MVC header
			include "controllers/frontend/headerController.php";
			$obj = new headerController();
			$obj -> index();
		?>
	<!-- end header -->

    <?php
          //auto load MVC
          echo $this->view;
    ?>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Modist</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                  <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                    <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                    <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                    <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                    <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FAQs</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
          </div>
        </div>
      </div>
    </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/frontend/js/jquery.min.js"></script>
  <script src="assets/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/frontend/js/popper.min.js"></script>
  <script src="assets/frontend/js/bootstrap.min.js"></script>
  <script src="assets/frontend/js/jquery.easing.1.3.js"></script>
  <script src="assets/frontend/js/jquery.waypoints.min.js"></script>
  <script src="assets/frontend/js/jquery.stellar.min.js"></script>
  <script src="assets/frontend/js/owl.carousel.min.js"></script>
  <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/frontend/js/aos.js"></script>
  <script src="assets/frontend/js/jquery.animateNumber.min.js"></script>
  <script src="assets/frontend/js/bootstrap-datepicker.js"></script>
  <script src="assets/frontend/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/frontend/js/google-map.js"></script>
  <script src="assets/frontend/js/main.js"></script>

  <script>
        $(document).ready(function(){

        var quantitiy=0;
           $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
                    
                    $('#quantity').val(quantity + 1);

                  
                    // Increment
                
            });

             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
              
                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });
            
        });
    </script>
    
  </body>
</html>