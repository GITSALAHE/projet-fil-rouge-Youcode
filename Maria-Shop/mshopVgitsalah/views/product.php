<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eshop";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

function printIt($value)
{
    echo "<pre>", print_r($value), "</pre>";
    die();
}
function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $value = array_values($data);
    $type = str_repeat('s', count($value));
    $stmt->bind_param($type, ...$value);
    $stmt->execute();
    return $stmt;
}
function selectAll($table, $condition = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($condition)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $i = 0;
        foreach ($condition as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $condition);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}



function addTocart($nameP, $size, $img, $price, $qte)
{
    global $conn;
    $sql = ("INSERT INTO `cart`(`nameProduct`, `size`, `imgUrl`, `price`, `Qte`) VALUES ('$nameP','$size', '$img', '$price', '$qte')");
    $res = mysqli_query($conn, $sql);
    return $res;
}
$count = '';
$count = array();
$db = selectAll("cart");
$count = count($db);
if (isset($_POST['addToCart'])) {
    $price = $_POST['price'];
    $qte = $_POST['qte'];
    $img = $_POST['image'];
    $name = $_POST['nameProduct'];
    $size = $_POST['size'];
    $result = addTocart($name, $size, $img, $price, $qte);
    header("Location:index.php");
    exit();
}

?>
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
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light">

        <a class="navbar-brand" href="#!">
            <h1>eshop+</h1>
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1" aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="waves-effect" href="#!">Home</a></li>
            <li class="breadcrumb-item"><a class="waves-effect" href="#!">Templates</a></li>
            <li class="breadcrumb-item active"><a class="waves-effect" href="#!">E-commerce</a></li>
        </ol>
        <!-- Breadcrumbs -->

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav1">

            <!-- Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="cart.php" class="nav-link navbar-link-2 waves-effect">
                        <span class="badge badge-pill red"><?php echo $count; ?></span>
                        <i class="fas fa-shopping-cart pl-0"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="united kingdom flag m-0"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                        <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                        Sign in
                    </a>
                </li>
                <li class="nav-item pl-2 mb-2 mb-md-0">
                    <a href="#!" type="button" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
                </li>
            </ul>

        </div>
        <!-- Links -->

    </nav>
    <!-- Navbar -->
    <div class="container">
        <form action="" method="post">
            <img src="https://elcopcbonline.com/photos/product/4/176/4.jpg" alt="" style="width: 20%;">
            <input type="hidden" name="image" value="https://elcopcbonline.com/photos/product/4/176/4.jpg">
            <input type="hidden" name="nameProduct" value="Casque of my love">
            <h1 name="nom">Casque of my love</h1>
            <div class="col-sm-1 mb-2">
            <select name="size" id="">
                <option value="M">M</option>
                <option value="S">S</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
            </div>
            <div class="col-sm-1">
                <input type="number" name="qte" class="form-control input-sm-2" min="1" value="1">
            </div>

            <h1>$<span>26.00</span> </h1>
            <input type="hidden" value="26.00" name="price">
            <button type="submit" class="btn btn-primary" name="addToCart">add to cart</button>
        </form>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>