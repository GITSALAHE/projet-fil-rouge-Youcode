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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /* E-commerce */
        .product-box {
            padding: 0;
            border: 1px solid #e7eaec;
        }

        .product-box:hover,
        .product-box.active {
            border: 1px solid transparent;
            -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
            -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
            box-shadow: 0 3px 7px 0 #a8a8a8;
        }

        .product-imitation {
            text-align: center;

            background-color: #f8f8f9;
            color: #bebec3;
            font-weight: 600;
        }

        .cart-product-imitation {
            text-align: center;
            padding-top: 30px;
            height: 80px;
            width: 80px;
            background-color: #f8f8f9;
        }

        .product-imitation.xl {
            padding: 120px 0;
        }

        .product-desc {
            padding: 20px;
            position: relative;
        }

        .ecommerce .tag-list {
            padding: 0;
        }

        .ecommerce .fa-star {
            color: #d1dade;
        }

        .ecommerce .fa-star.active {
            color: #f8ac59;
        }

        .ecommerce .note-editor {
            border: 1px solid #e7eaec;
        }

        table.shoping-cart-table {
            margin-bottom: 0;
        }

        table.shoping-cart-table tr td {
            border: none;
            text-align: right;
        }

        table.shoping-cart-table tr td.desc,
        table.shoping-cart-table tr td:first-child {
            text-align: left;
        }

        table.shoping-cart-table tr td:last-child {
            width: 80px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 600;
            color: #676a6c;
            display: block;
            margin: 2px 0 5px 0;
        }

        .product-name:hover,
        .product-name:focus {
            color: #1ab394;
        }

        .product-price {
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
            background-color: #1ab394;
            padding: 6px 12px;
            position: absolute;
            top: -32px;
            right: 0;
        }

        .product-detail .ibox-content {
            padding: 30px 30px 50px 30px;
        }

        .image-imitation {
            background-color: #f8f8f9;
            text-align: center;
            padding: 200px 0;
        }

        .product-main-price small {
            font-size: 10px;
        }

        .product-images {
            margin: 0 20px;
        }

        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }

        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($showingProduct as $product) : ?>

                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation">
                                <img style="width: 100%;" src="../assets/img/<?php echo $product['Image'] ?>" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    $<?php echo $product['Price'] ?>
                                </span>
                                <small class="text-muted"><?php
                                                            $nameC = $crud->selectOne('category', ['idC' => $product['idC']]);
                                                            echo $nameC['nameCategory']; ?></small>
                                <a href="#" class="product-name"><?php echo $product['nameProduct'] ?></a>


                                <div class="m-t text-righ">

                                    <a href="single_product.php?idP=<?php echo $product['idP'] ?>" class="btn btn-xs btn-outline btn-primary">add to cart <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <?php if ($i == $_GET['page']) : ?>
                        <li class="page-item disabled"><a class="page-link" href="category_page.php?categoryId=12&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php else : ?>
                        <li class="page-item "><a class="page-link" href="category_page.php?categoryId=12&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>