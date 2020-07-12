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

  <div class="background-overlay"></div>

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
          <li><a href="#">Store</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items">2</span>
              </div>
            </a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="image">
    <div class="all">
      <div class="promo-text">
        <h1 class="heading">MARIASHOP</h1>
        <h1 class="promo">25% Off On All Products</h1>
      </div>

      <div class="btn-grp">
        <button class="btn btn-large btnm1">SHOP NOW</button>
        <button class="btn btn-large btnm2">FIND MORE</button>
      </div>
    </div>

  </div>
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

  <div class="container card-shop">
    <div class="row">
      <div class="col-md-4">
        <div class="ps1"></div>
      </div>
      <div class="col-md-4">
        <div class="ps2"></div>
      </div>
      <div class="col-md-4">
        <div class="ps3"></div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div>

      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus quos alias corporis commodi, vel
        nesciunt? Qui nam cumque libero voluptatibus! Molestiae, et voluptates quibusdam reiciendis inventore quae
        excepturi repellendus voluptatibus!
      </p>
    </div>
  </div>


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