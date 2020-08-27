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
  <link rel="stylesheet" href="../assets/css/FAQ.css">
  <title>FAQ</title>
  </head>
<body>

<?php include_once ('nav.php') ?>


<div class="container">
  <h1 class="section__headline"  style="margin-top: 150px;">FAQs</h1>
  <h2 class="c-faqs__headline">Purchasing Maria-Shop</h2>
  <ul class="c-faqs">
    <li class="c-faq c-faq--active">
      <span class="c-faq__title">How can I order ?</span>
      <div class="c-faq__answer">
      You can order at any time by going <a href="store.php?store=true&page=1">here.</a><br/>
      there's two payement methode : Paypal and Cash on delivery.<br/>
      Please be aware that some orders are held for payment review and require manual approval. Our sales department reviews those orders during our business hours.
      </div>
    </li>
    <li class="c-faq">
      <span class="c-faq__title">When will my order ship ?</span>
      <div class="c-faq__answer">All orders ship within 1-2 business days from the date of your order confirmation. All orders received before 12pm EST will be processed same day; any orders placed after 12pm EST will be processed on the following business day. Orders placed Friday after 12pm EST will ship the following Monday.</div>
    </li>
    <li class="c-faq">
      <span class="c-faq__title">What is your return and exchange policy ?</span>
      <div class="c-faq__answer"> All orders must be returned within 30 days of purchase for a full refund. Returned items must be in the exact same condition as they were received.<br/>
        At this time, we do not accept exchanges.</br>
       Items indicated as “Final Sale” at the time of purchase are not eligible for return, exchange or merchandise credit.</div>
    </li>
  </ul>  <!-- /end c-faqs -->
  
    <h2 class="c-faqs__headline">Order Shipping</h2>
  <ul class="c-faqs">
    <li class="c-faq">
      <span class="c-faq__title">Shipping</span>
      <div class="c-faq__answer">We offer free ground shipping on all domestic orders. Orders are shipped on business days only. Business days are Monday-Friday, excluding holidays. Price will be calculated at checkout based on your order’s size and weight.</div>
    </li>
    <li class="c-faq">
      <span class="c-faq__title">Shipping Rates and Delivery Estimates?</span>
      <div class="c-faq__answer">
      All shipping rates are listed in American dollar. All duties, customs and taxes incurred when items are shipped internationally are the responsibility of the customer. Maria-Shop does not mark down the value of items, nor do we mark items as "gift". If you have any inquiries regarding duties, customs and taxes in your country, contact your local customs office. 
</div>
    </li>
  </ul>  <!-- /end c-faqs -->
  
    <h2 class="c-faqs__headline">Order information and concerns</h2>
  <ul class="c-faqs">
    <li class="c-faq">
      <span class="c-faq__title">I need to change something on my order. How can I do that ?</span>
      <div class="c-faq__answer">If you need to change or cancel your order, please <a href="ContactUs.php">contact us</a> immediately. Once our warehouse has processed your order, we will be unable to make any changes.

</div>
    </li>
    <li class="c-faq">
      <span class="c-faq__title">Why was my order canceled ?</span>
      <div class="c-faq__answer">If your order was unexpectedly cancelled, chances are that our fraud filter marked your order as fraudulent.</div>
    </li>
    <li class="c-faq">
      <span class="c-faq__title">Do I need an account to make an order?</span>
      <div class="c-faq__answer">Of course, Signing up for an account is necessary to make an order.</div>
    </li>
  </ul>  <!-- /end c-faqs -->
</div>

<?php include_once ('Footer.php') ?>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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

$('body').delegate('.c-faq', 'click', function(){
  $('.c-faq').removeClass('c-faq--active');
  $(this).addClass('c-faq--active');
});

$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
</script>