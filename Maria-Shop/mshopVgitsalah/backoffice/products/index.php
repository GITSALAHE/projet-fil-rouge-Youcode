<?php
include('../../app/database/connect.php');
include('../../app/database/db.php');
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
    <title>Manage product</title>
    <style>
        #wrapper {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-light">Maria shop </div>
            <div class="list-group list-group-flush">
                <a href="../dashboard.php" class="list-group-item list-group-item-action bg-dark text-primary">Dashboard</a>
                <a href="../category" class="list-group-item list-group-item-action bg-dark text-primary">Categories</a>
                <a href="" class="list-group-item list-group-item-action bg-dark active">Products</a>
                <a href="../orders" class="list-group-item list-group-item-action bg-dark text-primary">orders</a>
                <a href="../users" class="list-group-item list-group-item-action bg-dark text-primary">Users</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="../views/">Store <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['Admin'] ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <h1 style="text-align: center;">List Product</h1>
                <a name="" id="" class="btn btn-primary" href="create.php" role="button">Add product</a>
                <table class="table table-light">
                    <tbody>
                        <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($showing_product as $product) : ?>
                            <?php $nameC = $crud->selectOne('category', ['idC' => $product['idC']]) ?>
                            <tr>
                                <td><img src="../../assets/img/<?php echo $product['Image'] ?>" style="width: 100px;" alt=""></td>
                                <td style="font-family: poppins;font-weight:bold;font-size:30px"><?php echo $product['nameProduct']; ?> </td>
                                <td><?php echo $product['Price'] ?></td>
                                <td><?php echo $product['Qte'] ?></td>
                                <td><?php echo $nameC['nameCategory'] ?></td>
                                <td><a name="" id="" class="btn btn-success ml-10" href="edit.php?idModPr=<?php echo $product['idP'] ?>" role="button">edit</a>
                                    <a name="" id="" class="btn ml-2 btn-danger" href="index.php?del_pr=<?php echo $product['idP'] ?>" role="button">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>













    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>