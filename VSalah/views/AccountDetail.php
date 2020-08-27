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
  <title>Account Details</title>
</head>
<body>

<?php include_once ('nav.php') ?>


	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(../assets/img/categories.jpg)">
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
            <div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="#">My Account</a></li>
										<li>My Account Details</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        </div>
  </div>

  <!-- Checkout -->
<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Account Details</div>
						<div class="section_subtitle">Here You can change Your Informations</div>
						<div class="checkout_form_container">
							<form method="post" id="checkout_form" class="checkout_form">
              <input type="hidden" name="idP">
             <input type="hidden" name="orderNumber" value="">
             <input type="hidden" name="qte">
             <input type="hidden" name="status" value="pending">
             <div>
									<!-- Address -->
									<label for="checkout_Name">Full Name*</label>
									<input  name="fullname" type="text" id="checkout_Name" class="checkout_input" required="required">
                </div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Email Address*</label>
									<input type="email" name="email" id="checkout_email" class="checkout_input" required="required">
								</div>
								<div>
                <div class="row">
									<div class="col-xl-6">
										<!-- Password -->
										<label for="checkout_Pass">New Password*</label>
										<input type="text" name="password" id="checkout_Pass" class="checkout_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Confirm New Password -->
										<label for="checkout_New_Pass">Confirm New Password*</label>
										<input name="password" type="text" id="checkout_New_Pass" class="checkout_input" required="required">
									</div>
								</div>
                <div>
									<!-- Phone Number -->
									<label for="checkout_Phone">Phone Number*</label>
									<input  name="phone" type="text" id="checkout_Phone" class="checkout_input" required="required">
								</div>
								</div>
								<div>							             
						</div>
					</div>
        </div>
        <button id="checkout" class="button" name="checkout" type="submit">Save Changes</button>
</form>
			</div>
		</div>
	</div>
</div>


<?php include_once ('Footer.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(function () {
  $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      $('#search').addClass('open');
      $('#search > form > input[type="text"]').focus();
  });
  
  $('#search, #search button.close').on('click keyup', function(event) {
      if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
          $(this).removeClass('open');
      }
  });
  
  
 
});

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