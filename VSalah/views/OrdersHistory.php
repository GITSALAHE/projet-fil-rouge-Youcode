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
  <title>Order History</title>
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
										<li><a href="#">My Accout</a></li>
										<li>Orders</li>
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
  

<div class="container">
<div class="container-fluid">

<div class="row">
  <!-- table container -->
  <div class="col-sm-9">

    <table class="table table-striped table-hover table-responsive">
      <thead>
        <tr>
          <th>Order Number</th>
          <th>Status</th>
          <th class="align-right">Price</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="valign-middle" data-label="Order Number">
            <a href="#">#1542</a>
          </td>
          <td class="valign-middle" data-label="Status">
          Processing
          </td>
          <td class="valign-middle align-right" data-label="Price">
          $50.00
          </td>
          <td class="valign-middle align-right">
            <a class="btn btn-default" href="#" data-toggle="tooltip" title="View" data-placement="bottom" data-trigger="hover">
        
              <span class="visible-xs">more Detail</span>
            </a>
          </td>
        </tr>
        <tr>
          <td class="valign-middle" data-label="Order Number">
            <a href="#">#1550</a>
          </td>
          <td class="valign-middle" data-label="Status">
          Completed
          </td>
          <td class="valign-middle align-right" data-label="Price">
          $30.00
          </td>
          <td class="valign-middle align-right">
            <a class="btn btn-default" href="#" data-toggle="tooltip" title="View" data-placement="bottom" data-trigger="hover">
      
              <span class="visible-xs">more Detail</span>
            </a>
          </td>
        </tr>
        <tr>
          <td class="valign-middle" data-label="Order Number">
            <a href="#">#1590</a>
          </td>
          <td class="valign-middle" data-label="Status">
          Processing
          </td>
          <td class="valign-middle align-right" data-label="Price">
          $15.00
          </td>
          <td class="valign-middle align-right">
            <a class="btn btn-default" href="#" data-toggle="tooltip" title="View" data-placement="bottom" data-trigger="hover">
             
              <span class="visible-xs">more Detail</span>
            </a>
          </td>
        </tr>
      </tbody>
    </table>

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