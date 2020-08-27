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
  <link rel="stylesheet" href="../assets/css/Login-reg.css">
  <title>Account Details</title>
</head>
<body>

<?php include_once ('nav.php') ?>

  <div class="container"  style="display: flex; justify-content:center" >
  <div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content"> Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
      
         <?php include('../app/helpers/flashmessage.php') ?>
				<form class="signup-form" action="" method="post">
               
                    <input type="text" class="input" name="fullname" id="user_name" autocomplete="off" placeholder="full name">
					<input type="email" class="input" name="email" id="user_email" autocomplete="off" placeholder="Email">
                    <input type="password" class="input" name="password" id="user_pass" autocomplete="off" placeholder="Password">
                    <input type="text" class="input" name="phone_number" id="user_Phone" autocomplete="off" placeholder="Phone Number">
					<input type="submit" class="button"  name="register" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<p>By signing up, you agree to our</p>
					<p><a href="terms.php">Terms of service</a></p>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
      <?php
        if (isset($_POST['login'])) {
            if (count($errorLogin) > 0) : ?>

             <script>
               document.getElementById("login-tab").click();
             </script>
               
                <div class="alert alert-danger">
                    <?php foreach ($errorLogin as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div>
               
        <?php endif;
        } ?>
				<form class="login-form" action="login-reg.php" method="post"><br/>
					<input type="text" name="email" class="input" id="user_login" autocomplete="off" placeholder="Your Email"><br/>
					<input type="password" name="password" class="input" id="user_pass" autocomplete="off" placeholder="Password"><br/><br/>
					<input type="submit"  name="login" class="button" value="Login">
				</form><!--.login-form-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
    </div><!--.form-wrap-->
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