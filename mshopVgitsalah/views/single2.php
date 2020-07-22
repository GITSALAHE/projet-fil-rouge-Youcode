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
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="../assets/css/single.css">
<script src="https://use.fontawesome.com/c18f659ca0.js"></script>
<title>single product</title>
</head>
<body>

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

 <!-- Single product -->
<main class="card main-grid">
  <div class="card__content">
    <div class="card__head">
      <h2>t-shirt with <br>
        slogan
      </h2>
      <p class="card__text">Shirt sleeve T-shirt with a round <br> neckline and a contrast from print.</p>
      <p class="card__price">$44.00</p>
    </div>
    <div class="card__choose">
      <div class="card__size">
        <label for="size" class="card__label">size</label>
        <select name="size" id="size" class="card__select">
          <option value="small">S</option>
          <option value="medium">M</option>
          <option value="large">L</option>
          <option value="x-large">XL</option>
        </select>
      </div>
    </div>
    <div class="card__counter">
        <button class="card__numb" id="sub">-</button>
        <input type="number" class="card__count" value="1" disabled="disabled"></input>
        <button class="card__numb" id="add">+</button> 
      </div>
     <button class="btn btn--primary">Add to cart</button>
  </div>

  <div class="card__image">
  <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
    <div class='carousel-outer'>
        <!-- me art lab slider -->
        <div class='carousel-inner '>
            <div class='item active'>
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt=''id="zoom_05"  data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg"/>
            </div>
            <div class='item'  id="zoom_05">
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg" />
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg" />
            </div>
                
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg" id="zoom_05"/>
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg" id="zoom_05"/>
            </div>
            <div class='item'>
                <img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg" id="zoom_05"/>
            </div>
        </div>
            
        <!-- sag sol -->
        <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
            <span class='glyphicon glyphicon-chevron-right'></span>
        </a>
    </div>
    
    <!-- thumb -->
    <ol class='carousel-indicators mCustomScrollbar meartlab'>
        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='1'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='2'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='3'><img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='4'><img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' /></li>
        <li data-target='#carousel-custom' data-slide-to='5'><img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' /></li>
    </ol>
</div>
  </div>
</main>
 <!-- /.Single product -->


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



 <script>
 const addBtn = document.getElementById('add');
        const subBtn = document.getElementById('sub');
        const input = document.querySelector('.card__count');

        addBtn.addEventListener('click', () => {
            input.value = parseInt(input.value) + 1
        })

        subBtn.addEventListener('click', () => {
            if(input.value <= 1){

            }
            else{
                input.value = parseInt(input.value) - 1
            }
           
        })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>