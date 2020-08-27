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
</head>

<body>

<?php include_once ('nav.php') ?>

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
  
  <?php include_once ('Footer.php') ?>
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
		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
		
  })(jQuery); 
  $('#myCarousel').carousel({
    interval: 3000,
 })
</script>
