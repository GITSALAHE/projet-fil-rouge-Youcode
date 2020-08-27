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
  <link rel="stylesheet" href="../assets/css/smoothproducts.css">
  <title>Single Product</title>
    <style>
/*********************************
5. Home
*********************************/

.home
{
	width: 100%;
	height: 625px;
	background: #FFFFFF;
	z-index: 2;
	padding-top: 130px;
	padding-left: 60px;
	padding-right: 60px;
}
.home_container
{
	width: 100%;
	height: 100%;
}
.home_background
{
	position: relative;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.home_content_container
{
	position: absolute;
	top: 40%;
	left: 0;
	transform: translateY(-50%);
	width: 100%;
}
.home_content
{
	width: 580px;
}
.home_title
{
	font-size: 60px;
	font-weight: 600;
	color: #FFFFFF;
	line-height: 1.2;
}
.home_title span
{
	color: #8167a9;
}
.home_text
{
	margin-top: 7px;
}
.home_text p
{
	color: #FFFFFF;
}
/*********************************
6. Product Details
*********************************/

.product_details
{
	width: 100%;
	background: #FFFFFF;
	z-index: 2;
}
.details_row
{
	margin-top: 95px;
}

.details_image_large
{
	width: 100%;
}
.details_image_large img
{
	max-width: 100%;
}
.details_image_thumbnails
{
	margin-top: 17px;
}
.details_image_thumbnail
{
	width: calc((100% - 51px) / 4);
	cursor: pointer;
}
.details_image_thumbnail::after
{
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: solid 2px #1b1b1b;
	content: '';
	background: transparent;
	pointer-events: none;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.details_image_thumbnail.active::after,
.details_image_thumbnail:hover::after
{
	visibility: visible;
	opacity: 1;
}
.details_image_thumbnail img
{
	max-width: 100%;
}
.product_name
{
	font-size: 30px;
	font-weight: 600;
	color: #232323;
	line-height: 0.75;
}
.product_price
{
	font-size: 24px;
	font-weight: 600;
	margin-top: 9px;
	color: #8a8a8a;
}
.in_stock_container
{
	margin-top: 22px;
}
.availability
{
	display: inline-block;
	font-size: 14px;
	font-weight: 500;
	color: #6c6a74;
}
.in_stock_container span
{
	display: inline-block;
	font-size: 14px;
	font-weight: 500;
	color: #44a038;
	margin-left: 5px;
}
.details_name
{
	font-size: 24px;
	font-weight: 500;
	color: #1b1b1b;
	margin-top: -9px;
}

.details_price
{
	display: inline-block;
	font-size: 16px;
	font-weight: 500;
	color: #6c6a74;
	margin-top: 12px;
}
.details_text
{
	margin-top: 49px;
}
.details_text p
{
	font-weight: 500;
}
.product_quantity_container
{
	margin-top: 48px;
}
.product_quantity
{
	display: inline-block;
	width: 147px;
	height: 61px;
	border: solid 2px #d0d0d0;
	overflow: hidden;
	padding-left: 78px;
	vertical-align: middle;
}
.product_quantity span
{
	position: absolute;
	left: 23px;
	transform: translateY(50%);
	font-size: 16px;
	font-weight: 600;
	color: #6c6a74;
}
.product_quantity input
{
	display: block;
	width: 30px;
	height: 57px;
	border: none;
	outline: none;
	font-size: 16px;
	font-weight: 600;
	color: #1b1b1b;
	text-align: left;
	padding-left: 9px;
	line-height: 39px;
	float: left;
}
.quantity_buttons
{
	position: absolute;
    margin-left: 40px;
    margin-top: 15px;
}
.quantity_inc, 
.quantity_dec
{
	
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 100%;
	height: 50%;
	cursor: pointer;
}
.quantity_control i
{
	font-size: 10px;
	color: #232323;
	pointer-events: none;
}
.quantity_control:active
{
	border: solid 1px rgba(14, 140, 228, 0.2);
}
.quantity_inc
{
	padding-bottom: 3px;
	justify-content: flex-end;
}
.quantity_inc i
{
	
	transform: translateY(3px);
}
.quantity_dec
{
	padding-top: 3px;
	justify-content: flex-start;
}
.quantity_dec i
{
	-webkit-transform: translateY(-3px);
	-moz-transform: translateY(-3px);
	-ms-transform: translateY(-3px);
	-o-transform: translateY(-3px);
	transform: translateY(-3px);
}
.cart_button
{
	display: inline-block;
	vertical-align: middle;
	margin-left: 13px;
}
.cart_button::after
{
	background: #1b1b1b;
}
.details_share
{
	margin-top: 51px;
	border-top: solid 1px #d0d0d0;
}
.details_share span
{
	display: inline-block;
}
.details_share ul
{
	display: inline-block;
	margin-top: 31px;
	margin-left: 41px;
}
.details_share ul li
{
	display: inline-block;
}
.details_share ul li:not(:last-child)
{
	margin-right: 18px;
}
.details_share ul li a i
{
	font-size: 16px;
	color: #b5b5b5;
	padding: 5px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.details_share ul li a i:hover
{
	color: #1b1b1b;
}
.description_row
{
	margin-top: 91px;
}
.description_title
{
	display: inline-block;
	font-size: 24px;
	font-weight: 500;
	color: #1b1b1b;
}
.reviews_title
{
	display: inline-block;
	margin-left: 41px;
}
.reviews_title a
{
	font-size: 24px;
	font-weight: 500;
	color: #6c6a74;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.reviews_title a:hover
{
	color: #1b1b1b;
}
.description_text
{
	margin-top: 44px;
}

/*********************************
7. Products
*********************************/

.products
{
	width: 100%;
	background: #FFFFFF;
	z-index: 2;
	padding-top: 89px;
}
.products_title
{
	font-size: 30px;
	font-weight: 500;
	color: #1b1b1b;
}
.product_grid
{
	margin-top: 88px;
}
.product
{
	width: calc((100% - 90px) / 4);
	margin-bottom: 59px;
}
.product_image
{
	width: 100%;
}
.product_image img
{
	max-width: 100%;
}
.product_content
{
	width: 100%;
	padding-top: 36px;
	padding-bottom: 38px;
}
.product_title a
{
	font-size: 18px;
	font-weight: 500;
	color: #1b1b1b;
	line-height: 1.1;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_title a:hover
{
	color: #e95a5a;
}
.product_price
{
	font-size: 16px;
	font-weight: 500;
	color: #6c6a74;
	line-height: 0.75;
	margin-top: 13px;
}
.product_extra
{
	position: absolute;
	top: 0;
	left: 54px;
	width: 66px;
	height: 36px;
	text-align: center;
	-webkit-transform-origin: top left;
	-moz-transform-origin: top left;
	-ms-transform-origin: top left;
	-o-transform-origin: top left;
	transform-origin: top left;
	transform: rotate(90deg);
}
.product_extra a
{
	display: block;
	font-size: 16px;
	font-weight: 500;
	color: #FFFFFF;
	line-height: 36px;
}
.product_new
{
	background: #6c6a74;
}
.product_sale
{
	background: #e95a5a;
}
.product_hot
{
	background: #1b1b1b;
}
.button
{
	width: 178px;
	height: 61px;
	background: none;
	text-align: center;
	border: solid 2px #1b1b1b;
	overflow: hidden;
	cursor: pointer;
}
.button a
{
	display: block;
	position: relative;
	font-size: 16px;
	font-weight: 600;
	line-height: 57px;
	color: #1b1b1b;
	background: none;
	z-index: 1;
	transition: all 200ms ease;
}
.button:hover{

  background-color: #8167a9;
  border: solid 2px #8167a9;

}
.details_content{
    margin-top: 250px;
}

@media (max-width: 767px) { 

.home
{
padding-left: 0px;
padding-right: 0px;
}
.home_content {
    width: 100%;
}
.details_content{
    margin-top: 20px;
}
.cart_button
{
	
    margin-left: 0px;
    margin-top: 30px;
}
}


  </style>
</head>
<body>

<?php include_once ('nav.php') ?>

<div class="product_details">

		<div class="container">
    <?php include('../app/helpers/flashmessage.php') ?>
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
            
				
            <div class="sp-wrap">
         
            <a href="../assets/img/<?php echo $image1 ?>"><img src="../assets/img/<?php echo $image1 ?>" alt=""></a>
            <a href="../assets/img/<?php echo $image2 ?>"><img src="../assets/img/<?php echo $image2 ?>" alt=""></a>
            </div>
				</div>


				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo $nameProduct?></div>
						<div class="details_price">$ <?php echo $priceProduct ?></div>
                  <!-- Product Quantity -->
                  <form method="post" action="">
      <input type="hidden" name="idP" value="<?php echo $_GET['singleIdP'] ?>">
      <input type="hidden" name="idU" value="<?php echo $_SESSION['idU'] ?>">
    <?php if(count($sizeProduct) == 0 ): ?>
      <input type="hidden" name="" >
    <?php else: ?>
                                    <div class="product_quantity_container">
                                    <div class="details_text">
                            <p>Select Size Memory </p>
                            <select name="idSize" id="size" class="form-control">
                            <?php foreach($sizeProduct as $size): ?>
                              <option value="<?php echo $size['idSize'] ?>"><?php $sizeName = $crud->selectOne('size', ['idSize' => $size['idSize']]); echo $sizeName['nameSize']?></option>
                              <?php endforeach; ?>
	                          </select>
            </div><br/><br/>
            <?php endif; ?>
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" name="qte" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
                            </div>
   
                            
                            <button type="submit" name="addToCart" class="button cart_button">Add to cart</button>
            </div>
            </form>
						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
					</div>
					<div class="description_text">
						<p><?php echo $description ?></p>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/js/smoothproducts.min.js"></script>
<script type="text/javascript">
/* wait for images to load */
$(window).load(function() {
  $('.sp-wrap').smoothproducts();
});
</script>

<script>
  $(function () {
  $('a[href="#search"]').on('click', function(event) {
      event.preventDefault();
      $('#search').addClass('open');
      $('#search > form > input[type="text"]').focus();
  });
  var input = $('#quantity_input');
    var incButton = $('#quantity_inc_button');
    var decButton = $('#quantity_dec_button');
    var originalVal;
    var endVal;

    incButton.on('click', function()
    {
      originalVal = input.val();
      endVal = parseFloat(originalVal) + 1;
      input.val(endVal);
    });

    decButton.on('click', function()
    {
      originalVal = input.val();
      if(originalVal > 1)
      {
        endVal = parseFloat(originalVal) - 1;
        input.val(endVal);
      }
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
