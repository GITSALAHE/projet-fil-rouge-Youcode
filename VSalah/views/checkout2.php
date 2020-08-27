<?php
include('../path.php');
include(ROOT_PATH .'/app/database/connect.php');
include(ROOT_PATH .'/app/database/db.php');
include(ROOT_PATH .'/app/controllers/middleware.php');
showCheckout();
include(ROOT_PATH .'/app/controllers/category.php');
include(ROOT_PATH .'/app/controllers/product.php');
include(ROOT_PATH .'/app/controllers/cart.php');
include(ROOT_PATH .'/app/controllers/orders.php');
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
  <link rel="stylesheet" href="../assets/css/checkout.css">
  <title>Checkout</title>
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
										<li><a href="http://localhost/VSalah/views">Home</a></li>
										<li><a href="http://localhost/VSalah/views/cart2.php">Shopping Cart</a></li>
										<li>Checkout</li>
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
						<div class="section_title">Billing Address</div>
						<div class="section_subtitle">Enter your address info</div>
						<div class="checkout_form_container">
							<form method="post" id="checkout_form" class="checkout_form">
              <input type="hidden" name="idP">
             <input type="hidden" name="orderNumber" value="">
             <input type="hidden" name="qte">
             <input type="hidden" name="status" value="pending">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="checkout_name">First Name*</label>
										<input type="text" name="firstname" id="checkout_name" class="checkout_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="checkout_last_name">Last Name*</label>
										<input name="lastname" type="text" id="checkout_last_name" class="checkout_input" required="required">
									</div>
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Email Address*</label>
									<input type="email" name="email" id="checkout_email" class="checkout_input" required="required">
								</div>
								<div>
                <div>
									<!-- Address -->
									<label for="checkout_address">Address*</label>
									<input  name="address" type="text" id="checkout_address" class="checkout_input" required="required">
								</div>
									
								</div>
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode">Zipcode*</label>
									<input type="text" name="zip" id="checkout_zipcode" class="checkout_input" required="required">
								</div>
								<div>
									<!-- City / Town -->
									<label for="checkout_city">City/Town*</label>
									<select id="checkout_city" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>City</option>
										<option>City</option>
										<option>City</option>
										<option>City</option>
									</select>
								</div>
								<div>
									<!-- Province -->
									<label for="checkout_province">Province*</label>
									<select id="checkout_province" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>Province</option>
										<option>Province</option>
										<option>Province</option>
										<option>Province</option>
									</select>
								</div>
							
							
								<div class="checkout_extra">
									<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								
								<label class="payment_option clearfix">Cach on delivery
									<input name="payment" type="radio" name="radio" checked>
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

								</div>
               
						</div>
					</div>
        </div>
     

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>
							<ul class="order_list">
              <?php
                    $total = 0.00;
                    foreach ($cardOfProductCart as  $pcart) :
                        $nameProduct = $crud->selectOne('product', ['idP' => $pcart['idP']]);
                        $total = $total + ($nameProduct['Price'] * $pcart['qte']);
                       
                    ?>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><?php echo $nameProduct['nameProduct'] . ' X ' . $pcart['qte'] ?></div>
									<div class="order_list_value ml-auto"><?php echo $nameProduct['Price'] * $pcart['qte'] ?></div>
                </li>
                <?php endforeach; ?>

								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<div class="order_list_value ml-auto">$ <?php echo $total ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto">$ <?php echo $total ?></div>
								</li>
							</ul>
						</div>

						
						<!-- Order Text -->
            <div class="order_text">Place Your Order Now with free Shipping Thank You for trusting Us.</div>
            <button id="checkout" class="button" name="checkout" type="submit">Place
        Your Order</button>
        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

  <?php include ('footer.php') ?>
  <script>
    $(document).ready(function () {
      $('input[type=radio]').change(function () {
        // When any radio button on the page is selected,
        // then deselect all other radio buttons.
        $('input[type=radio]:checked').not(this).prop('checked', false);
      });
    });​
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script>
    $(document).ready(function () {
      $("input[type=radio]").prop("checked", false);
      $("input[type=radio]:first").prop("checked", true);

      $("input[type=radio]").click(function (event) {
        $("input[type=radio]").prop("checked", false);
        $(this).prop("checked", true);

        //event.preventDefault();
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
	
  </script>
</body>

</html>