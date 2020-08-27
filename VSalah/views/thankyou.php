<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/controllers/category.php');
include('../app/controllers/product.php');
include('../app/controllers/cart.php');
include('../app/controllers/orders.php');
// include('../app/controllers/middleware.php');
// showThankyouPage(); 
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
  <link rel="stylesheet" href="../assets/css/thanku.css">
  <title>Thank You</title>
</head>
<body>
  
<?php include_once ('nav.php') ?>


  
	
	<div class="container MA">
		<div class="jumbotron text-center">
			<div class="checkMark">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166 150.9"><path d="M0.3 96l62.4 54.1L165.6 0.3"/></svg>
            </div>
            <br/>
           
            <p class="lead">A great big Thank You for Your purchase Your commande ID is #<?php echo $_GET['idOrder'] ?>!</p><br/>
            <p style="font-family: auto;">Thanks a bunch for trust in us It means a lot to us,We really appreciate you giving us a moment of your time today.</p>
			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<a href="index.php" class="link">Go to Home</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="spacing"></div>
   <?php include ('footer.php') ?>

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
		//show nav items
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
