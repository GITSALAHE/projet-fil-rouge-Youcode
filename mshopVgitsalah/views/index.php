<?php
include('../app/database/connect.php');
include('../app/database/db.php');
include('../app/controllers/category.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="../assets/css/index.css">

  <script src="https://use.fontawesome.com/c18f659ca0.js"></script>

  <title>index</title>

</head>

<body>
  <!--.background-overlay-->
  <div class="background-overlay"></div>
  <!--/.background-overlay -->

  <!--.nav-collapse -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="../assets/img/your-logo__7_-removebg-preview.png" width="200px" height="46px" alt="">
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="Store.php">Store</a></li>

          <?php foreach ($navbar_categories as $category) : ?>
            <li><a href="category_page.php?categoryId=<?php echo $category['idC'] ?>"><?php echo $category['nameCategory'] ?></a></li>

          <?php endforeach; ?>
          <li><a href="login-reg.php">Account</a></li>
          <li><a href="ContactUs.php">Contact Us</a></li>
          <li><a href="#">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items">2</span>
              </div>
            </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/.nav-collapse -->

  <!--container header-->
  <div class="image">
    <div class="container">
      <div class="promo-text">
        <h1 class="heading">MARIA SHOP</h1>
        <h1 class="promo">25% Off On All Products</h1>
      </div>

      <div class="btn-grp">
        <button class="btn btn-large btnm1">SHOP NOW</button>
        <button class="btn btn-large btnm2">FIND MORE</button>
      </div>
    </div>
  </div>
  <!--end container header-->

  <!--Logo Slide-->
  <div class="container logos">
    <div class="customer-logos">
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image1.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image2.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image3.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image4.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image5.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image6.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image7.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image8.png"></div>
    </div>
  </div>

  <!--/Logo Slide-->

  <!--Cards-->
  <div class="container card-shop">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="ps1">
          <p>Amazing Stuff is here</p>
          <div class="btnShop" style="text-align:center;">
            <button class="btn btn-large btnm1">SHOP NOW</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="ps2">
          <p>Shop Today and now</p>
          <div class="btnShop" style="text-align:center;">
            <button class="btn btn-large btnm1">SHOP NOW</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="ps3">
          <p>latest amazing trends</p>
          <div class="btnShop" style="text-align:center;">
            <button class="btn btn-large btnm1">SHOP NOW</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Cards-->

  <!-- container gris-->
  <div class="container mt-5">

    <!-- contenu-->
    <div class="Picontainer">
      <div class="container">
        <div class="promo-text" style="margin-top:150px;">
          <h1 class="promo">Spoil Yourself Today</h1>
          <h1 class="heading">Stay Home And Shop Online</h1>
        </div>
        <div class="btn-grp" style="margin-top:50px;">
          <button class="btn btn-large btnm1">BUY NOW</button>
        </div>
      </div>
    </div>
    <!-- /contenu-->

    <!-- icon box -->
    <div class="container spd-padding-top-50">
      <div class="spd-row content-101">
        <div class="col-md-3 col-sm-3 icon-box-animaiton text-center">
          <div class="icon-box">
            <i class="fa fa-globe fa-2x icons"></i>
          </div>
          <h3>Worldwide Shipping</h3>
        </div>

        <div class="col-md-3 col-sm-3 icon-box-animaiton text-center">
          <div class="icon-box">
            <i class="fa fa-star fa-2x icons"></i>
          </div>
          <h3>Best Quality</h3>
        </div>

        <div class="col-md-3 col-sm-3 icon-box-animaiton text-center">
          <div class="icon-box">
            <i class="fa fa-heart fa-2x icons"></i>
          </div>
          <h3>Best Offers</h3>
        </div>

        <div class="col-md-3 col-sm-3 icon-box-animaiton text-center">
          <div class="icon-box">
            <i class="fa fa-lock fa-2x icons"></i>
          </div>
          <h3>Secure Payments</h3>
        </div>

      </div>
    </div>
    <!-- icon box -->
  </div>
  <!-- /container gris-->


  <!-- Footer -->
  <footer class="page-footer font-small special-color-dark pt-4">
    <h4>Quick Links</h4>
    <!-- Footer Elements -->
    <div class="container" style="margin-top: 40px;">
      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            Home
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            My account
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            Cart
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            Contact
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->
    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright">
              <p>© <span>2020</span> <a href="#" class="transition">MariaShop</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer -->


  <!--Bottom Footer-->
  <!--Bottom Footer-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script>
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
  </script>
</body>

</html>