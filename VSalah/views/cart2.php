<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/controllers/middleware.php');
showCart();
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
  <link rel="stylesheet" href="../assets/css/cart.css">
  <title>Cart</title>
  </head>
<body>

<?php include_once ('nav.php') ?>


<!-- Home -->

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
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Categories</a></li>
										<li>Shopping Cart</li>
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



   <!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
            <div class="cart_info_col cart_info_col_total">Action</div>
           
					</div>
				</div>
      </div>
      <?php
                        $total = 0.00;
                        foreach ($getCountCart as $dataCart) :
                            $productInfo = $crud->selectOne('product', ['idP' => $dataCart['idP']]);
                            $total = $total + ($productInfo['Price'] * $dataCart['qte'])
                        ?>
                        <form method="POST">
                            <input type="hidden" name="idU" value="<?php echo $_SESSION['idU'] ?>">
                            <input type="hidden" name="idCart" value="<?php echo $dataCart['idCart'] ?>">
                            <input type="hidden" name="idP" value="<?php echo $dataCart['idP'] ?>">
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="../assets/img/<?php echo $productInfo['Image'] ?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#"><?php echo $productInfo['nameProduct'] ?></a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price">$<?php echo $productInfo['Price'] ?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
						<div class="col-xs-4">
                                        <input type="number" min="1" class="form-control input-sm" name="qte"
                                            value="<?php echo $dataCart['qte'] ?>">
                                    </div>
            </div>
            
						<!-- Total -->
						<div class="cart_item_total">
            <div class="cart_buttons_right ml-lg-auto">
							<div class="clear_cart_button">
              <button><a href="cart2.php?del_id=<?php echo $dataCart['idCart']; ?>">Delete</a></button></div>
							<div class="update_cart_button">
                <button type="submit" name="updateCart">Update</button></div>
						</div>
            </div>
					</div>

				</div>
      </div>
      </form>
      <?php endforeach; ?>

			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="http://localhost/VSalah/views/store.php?store=true&page=1">Continue shopping</a></div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto"><?php echo $total . '$' ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto"><?php echo $total . '$' ?></div>
								</li>
							</ul>
						</div>
						<div type="button" name="checkout" id="checkout" class="button checkout_button"><a href="checkout2.php">Proceed to checkout</a></div>
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
$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
</script>