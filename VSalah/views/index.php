<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/controllers/category.php');
include('../app/controllers/product.php');
include('../app/controllers/cart.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/c18f659ca0.js"></script>
  <link rel="stylesheet" href="../assets/css/index.css">
  <title>index</title>
  <style>
 


</style>
</head>

<body>

  <!--.nav-collapse -->

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="index2.php" target="_blank"><img src="../assets/img/logo__3_-removebg-preview.png" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Store</a>
                                </li>
                                <?php foreach ($navbar_categories as $category) : ?>
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                  <a class="nav-link" href="category_page.php?categoryId=<?php echo $category['idC'] ?>&page=1"><?php echo $category['nameCategory'] ?></a>
                             </li>

                                 <?php endforeach; ?>
                                 <?php if(isset($_SESSION['idU'])): ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a  href="myaccount.php" class="nav-link" href="#">My Account</a>
                                </li>
                                <?php else: ?>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="login-reg.php">Account</a></li>
                                <?php endif; ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Contact</a>
                                </li>
                                <?php if(isset($_SESSION['idU'])) :?>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"><a class="nav-link" href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items"><?php echo $countCart ?></span>
              </div>
            </a></li>
          <?php else: ?>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"><a class="nav-link" href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items">0</span>
              </div>
            </a></li>
          <?php endif; ?>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
    </div>
<!-- Navbar -->

<!-- slider image -->

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>A new Online <br/>
              Shop experience.</h4>
              <p>You'll find a huge selection of the latest cell phones for sale <br>
              We gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../assets/img/Slide.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>A new Online <br/>
              Shop experience.</h4>
              <p>You'll find a huge selection of the latest cell phones for sale <br>
              We gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../assets/img/slide2.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>A new Online <br/>
              Shop experience.</h4>
              <p>You'll find a huge selection of the latest cell phones for sale <br>
              We gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../assets/img/slide3.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
          </div>
<!--slide end--> 

<!-- Ads -->

<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(../assets/img/pexels-andrea-piacquadio-761963.jpg)">
				<div class="avds_small_inner">
					<div class="avds_small_content">
						<div class="avds_title">Smart Phones</div>
						<div class="avds_link"><a href="categories.html">See More</a></div>
					</div>
                </div>
                </div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(../assets/img/pexels-noah-erickson-404280.jpg)">
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Buy newish tech</div>
						<div class="avds_text">Safety, simplicity make us better.</div>
						<div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
					</div>
				</div>
            </div>
            </div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="../assets/img/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>We Offer Free Shipping Worldwide thefree shipping will be noted on the product page </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="../assets/img/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Never settle for less – ship any purchase back for free.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="../assets/img/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>we will be happy to advise you on all things connected to our services.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
    </div>
    
    
	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(../assets/img/pexels-jess-bailey-designs-788946.jpg);background-attachment: fixed;"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Devices</div>
							<div class="avds_text">we always provides high quality products and services via our platform.</div>
							<div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-widget">
          <h3>Stay in touch</h3>
          <div class="footer-widget-content">
            <a href="mailto:support@example.com" class="contact-link red">sales@gmail.com </a>
            <a href="tel:0121234" class="contact-link">(212) 456-789</a>
            <div class="footer-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Links</h3>
        <div class="footer-widget-content">
          <div class="media">
              <div class="media-body">
                 <p><a href="#">Home </a></p>
                
              </div>
           </div>
          <div class="media">
              <div class="media-body">
                 <p><a href="#">My Account</a></p>
              </div>
           </div>
           <div class="media">
              <div class="media-body">
                 <p><a href="#">Cart</a></p>
              </div>
           </div>
           <div class="media">
              <div class="media-body">
                 <p><a href="#">Contact</a></p>
              </div>
           </div>
        </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Other Business</h3>
        <div class="footer-widget-content">
          <div class="media">
              <div class="media-body">
                 <p><a href="#">FAQ </a></p>
                
              </div>
           </div>
          <div class="media">
              <div class="media-body">
                 <p><a href="#">terms and Condition</a></p>
              </div>
           </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    </body>
</html>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>


(function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});		
		

		
  })(jQuery); 
  $('#myCarousel').carousel({
    interval: 3000,
 })
</script>
  <script>
