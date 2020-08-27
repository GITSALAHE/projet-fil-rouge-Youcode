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
  <link rel="stylesheet" href="../assets/css/store.css">
  <title>Categorie</title>
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
								<div class="home_title">
      <?php 
    $nameC = '';
    $nameCategory = $crud->selectOne('category', ['idC' => $_GET['categoryId']]);
    echo $nameC = $nameCategory['nameCategory']; ?><span>.</span></div>
								<div class="home_text"><p>You'll find a huge selection of the latest cell phones for sale.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        </div>
	</div>


    <!--.product grid -->
    <div class="container">
        <div class="row" style="margin-top: 100px;">
     <br/>
    
            <?php foreach($showingProduct as $product):
                if($product['Qte'] > 0):
                ?>
                
            <div class="col-md-3 col-sm-6"  style="margin-bottom:50px;">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" style="height: 400px;"
                                src="../assets/img/<?php echo $product['Image'] ?>">
                            <img class="pic-2" src="../assets/img/<?php echo $product['Image2'] ?>"
                                style="height: 400px;">
                        </a>
                        <ul class="social">
                            <li><a href="singleProduct.php?singleIdP=<?php echo $product['idP'] ?>"
                                    data-tip="Quick View"><i class="fa fa-search"></i></a></li>

                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a
                                href="singleProduct.php?singleIdP=<?php echo $product['idP'] ?>"><?php echo $product['nameProduct'] ?></a>
                        </h3>
                        <div class="price">$ <?php echo $product['Price'] ?>
                        </div>
                        <a class="add-to-cart" href="singleProduct.php?singleIdP=<?php echo $product['idP'] ?>">+ More
                            info</a>
                    </div>
                </div>
            </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </div>
    <hr>
    <div class="container" style="display: flex;justify-content:center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                <?php if ($i == $_GET['page']) : ?>
                <li class="page-item disabled"><a class="page-link"
                        href="category_page.php?categoryId=12&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php else : ?>
                <li class="page-item "><a class="page-link"
                        href="category_page.php?categoryId=12&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

<?php include_once ('footer.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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