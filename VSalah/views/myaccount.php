<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/helpers/validateUser.php');
include('../app/controllers/users.php');
include('../app/controllers/category.php');
include('../app/controllers/product.php');
include('../app/controllers/cart.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/c18f659ca0.js"></script>
  <link rel="stylesheet" href="../assets/css/MyAccount.css">

  <title>index</title>
</head>

<body>

<?php include_once ('nav.php') ?>
  
  <div class="container">
  <div class="navVertical">
  <div class="M-Account">
  <ul class="nn">
  <li><a class="active" href="myaccount.php">Dashboard <span class="arrow">»</span></a></li>
  <li><a href="OrdersHistory.php">Orders <span class="arrow">»</span></a></li>
  <li><a href="AccountDetail.php"> Account details <span class="arrow">»</span></a></li>
  <li>Logout <span class="arrow">»</span></li>
</ul>
  </div>

<div class="M-Account" style="margin-top: 50px;">
 <p>Hello </p>

<p>From your account dashboard you can view your recent orders and edit your account details.</p>
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
		//Show nav items 
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
