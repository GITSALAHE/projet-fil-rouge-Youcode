<?php
include('../../app/database/connect.php');
include('../../app/database/db.php');
include('../../app/controllers/middleware.php');
adminOnly();
include('../../app/helpers/validateProduct.php');
include('../../app/controllers/product.php');

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
    <title>Edit product</title>
</head>

<body>

    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
            <h1 style="text-align: center;">Edit product : </h1>
            <input type="hidden" name="idP" value="<?php echo $idP_edit ?>">
            <?php include('../../app/helpers/flashmessage.php') ?>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Back to product</a>
            <div class="form-group">
                <label for="my-input">Name product</label>
                <input id="my-input" class="form-control" value="<?php echo $name_edit_product ?>" type="text" name="nameProduct">
            </div>
            <div class="form-group">
                <label for="my-input">Price</label>
                <input id="my-input" class="form-control" value="<?php echo $price_edit ?>" type="text" name="Price">
            </div>
            <div class="form-group">
                <label for="my-input">Qte</label>
                <input id="my-input" class="form-control" value="<?php echo $qte_edit ?>" type="number" name="Qte">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="button" onclick="infile()">
                    <input type="file" style="display:none" name="Image" id="fil">
                    <i class="fa fa-fw fa-camera"></i>
                    <span>Upload image</span>
                </button>
            </div>

            <div class="form-group">
                <label for="my-select">Category</label>
                <select id="my-select" class="form-control" value="<?php ?>" name="idC">
                    <option value=""></option>
                    <?php foreach ($categories_product as $cat) : ?>
                        <?php if (!empty($category_edit) && $category_edit == $cat['idC']) : ?>
                            <option selected value="<?php echo $cat['idC'] ?>"><?php echo $cat['nameCategory'] ?></option>
                        <?php else : ?>
                            <option value="<?php echo $cat['idC'] ?>"><?php echo $cat['nameCategory'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
           
            <button name="editProduct" type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function infile() {
            document.getElementById('fil').click()

        }
    </script>
</body>

</html>