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

  <link rel="stylesheet" href="../assets/css/ContactUs.css">

  <script src="https://use.fontawesome.com/c18f659ca0.js"></script>

  <title>Contact us</title>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Store</a></li>

          <?php foreach ($navbar_categories as $category) : ?>
            <li><a href="category_page.php?categoryId=<?php echo $category['idC'] ?>"><?php echo $category['nameCategory'] ?></a></li>

          <?php endforeach; ?>
          <li><a href="login-reg.php">Account</a></li>
          <li><a class="active" href="ContactUs.php">Contact Us</a></li>
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
        <h1 class="heading">CONTACT US</h1>
      </div>
    </div>
  </div>
  <!--end container header-->


  <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                  <form>
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <div class="blue-button">
                                        <button class="btn btn-large btnm1">Send Message</button>
                                        </div>
                                      </fieldset>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <h3>You tell us We listen</h3>
                                            <ul>
                                                <li><span>Phone:</span><a href="#"> +1 333 4040 5566</a></li>
                                                <li><span>Email:</span><a href="#"> contact@MariaShop.com</a></li>
                                                <li><span>Address:</span><i class="fa fa-map-marker"></i> 212 Barrington Court New York</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main>

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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
