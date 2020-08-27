<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/controllers/category.php');
include('../app/controllers/product.php');
include('../app/controllers/cart.php');
include('../app/controllers/contact.php');
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
  <link rel="stylesheet" href="../assets/css/contact.css">
  <title>Contact Us</title>
  <style>

  </style>
</head>
<body>

<?php include_once ('nav.php') ?>

  <!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(../assets/img/pexels-bongkarn-thanyakij-3740723.jpg)">
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>Contact</li>
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


  	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">
            <?php  
                     if(isset($Error))  
                     {  
                          echo "<div class='alert simple-alert'>
                          <p>".$Error."</p>
                          
                        </div><br/><br/>";  
                     }  
                     else if(isset($Message))  {
                     echo "<div class='alert simple-alert'>
                     <p>".$Message."</p>
                     
                   </div><br/><br/>";  
                     }

                     ?>

							<form action="" method="post" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Full Name*</label>
										<input type="text" name="name" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Subject</label>
										<input name="subject" type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Email</label>
									<input name="email" type="email" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea  name="message" id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button name="SendMail" class="button contact_button"><span>Send Message</span></button>
							</form>
						</div>
					</div>
				</div>
<!-- Contact Info -->
<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Marketing</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shippiing & Returns</div>
							<ul>
								<li>Phone: <span>+212 645 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone: <span>+212 645 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
      </div>
		</div></div>
<!-- Footer -->
<?php include_once ('Footer.php') ?>
  <!-- Footer -->


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
