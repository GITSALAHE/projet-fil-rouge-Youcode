<!--.nav-collapse -->
<link rel="stylesheet" href="../assets/css/nav.css">
<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="index.php" target="_blank"><img src="../assets/img/Logo.png" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="store.php?store=true&page=1">Store</a>
                                </li>
                                <?php foreach ($navbar_categories as $category) : ?>
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                  <a class="nav-link" href="category_page.php?categoryId=<?php echo $category['idC'] ?>&page=1"><?php echo $category['nameCategory'] ?></a>
                             </li>

                                 <?php endforeach; ?>
                                 <?php if(isset($_SESSION['idU'])): ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a  href="myaccount.php" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                  <div class="dropdown-menu">
										<a class="dropdown-item" href="OrdersHistory.php">Orders</a>
										<a class="dropdown-item" href="AccountDetail.php">Account Details</a>
										<a class="dropdown-item" href="#">LogOut</a>
									</div>
                                </li>
                                <?php else: ?>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="login-reg.php">Account</a></li>
                                <?php endif; ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="contactus.php">Contact</a>
                                </li>
                                <?php if(isset($_SESSION['idU'])) :?>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"><a class="nav-link" href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items"><?php echo $countCart ?></span>
              </div>
            </a></li>
          <?php else: ?>
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4"><a class="nav-link" href="cart2.php">
              <div class="cart-nav nav-item-link">
                <span class="fa-shopping-cart"></span>
                <span class="nav-cart-items">0</span>
              </div>
            </a></li>
          <?php endif; ?>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
    </div>
<!-- Navbar -->