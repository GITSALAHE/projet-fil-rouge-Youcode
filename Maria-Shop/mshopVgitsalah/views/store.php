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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/Store.css">
  <script src="https://use.fontawesome.com/c18f659ca0.js"></script>
  <title>Store</title>
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
          <li><a class="active"  href="store.php?store=true&page=1">Store</a></li>

          <?php foreach ($navbar_categories as $category) : ?>
            <li><a href="category_page.php?categoryId=<?php echo $category['idC'] ?>&page=1">
            <?php echo $category['nameCategory'] ?></a>
          </li>

          <?php endforeach; ?>
          <?php if(isset($_SESSION['idU'])): ?>
            <li><a href="myaccount.php">My Account</a></li>
          <?php else: ?>
            <li><a href="login-reg.php">Account</a></li>
          <?php endif; ?>          <?php if(isset($_SESSION['idU'])) :?>
          <li><a href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items"><?php echo $countCart ?></span>
              </div>
            </a></li>
          <?php else: ?>
          <li><a href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items">0</span>
              </div>
            </a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!--/.nav-collapse -->

  <!--.product grid -->
  <div class="container">
    <div class="row" style="margin-top: 90px;">
    <h3 class="h3">
      <a href="index.php">Home</a>
      &nbsp; / &nbsp; Store
    </h3> <br/>
    <!-- search product -->
    <form action="" method="post">
    <div class="input-group MB-5">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
  <!-- end search product -->
    <?php foreach($allProductShow as $product): ?>
        
        <div class="col-md-3 col-sm-6" style="margin-bottom:50px;">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" style="height: 400px;" src="../assets/img/<?php echo $product['Image'] ?>">
                        <img class="pic-2" src="../assets/img/<?php echo $product['Image2'] ?>" style="height: 400px;">
                    </a>
                    <ul class="social">
                        <li><a href="singleProduct.php?singleIdP=<?php echo $product['idP'] ?>" data-tip="View product"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="singleProduct.php?singleIdP=<?php echo $product['idP'] ?>"><?php echo html_entity_decode($product['nameProduct'])  ?></a></h3>
                    <div class="price">$ <?php echo $product['Price'] ?>
                    </div>
                    <?php
                                                            $nameC = $crud->selectOne('category', ['idC' => $product['idC']]);?>
                    <a class="add-to-cart" href="category_page.php?categoryId=<?php echo $product['idC'] ?>&page=1"><?php echo $nameC['nameCategory'] ?></a>
                </div>
            </div>
        </div>
          <?php endforeach; ?>
      
    </div>
</div>
<hr>
<div class="container" style="display:flex;justify-content:center;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $pageStore; $i++) : ?>
                    <?php if ($i == $_GET['page']) : ?>
                        <li class="page-item disabled"><a class="page-link" href="store.php?store=true&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php else : ?>
                        <li class="page-item "><a class="page-link" href="store.php?store=true&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

  <?php include_once ('footer.php') ?>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>