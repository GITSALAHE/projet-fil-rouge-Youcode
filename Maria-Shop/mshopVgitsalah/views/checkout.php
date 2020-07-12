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

function checkout($table, $fname, $lname, $email, $address, $country, $zip, $paypal, $cod, $product)
{
    global $conn;
    $sql = "INSERT INTO `checkout` (`fname`, `lname`, `email`, `Address`, `Country`, `zip`, `paypal`, `cod`, `product`) VALUES ('$fname', '$lname', '$email', '$address', '$country', '$zip', '$paypal', '$cod', '$product')";
    $res = mysqli_query($conn, $sql);
    return $res;
}
$count = '';
$count = array();
$db = selectAll("cart");
$count = count($db);
if (isset($_POST['checkout'])) {
    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $email = $_POST['email'];
    // $address = $_POST['address'];
    // $country = $_POST['country'];
    // $zip = $_POST['zip'];
    // $paypal = $_POST['paypal'];
    // $cod = $_POST['cod'];
    // $product = $_POST['product'];
    printIt($_POST);
}
printIt($db);
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
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light">

        <a class="navbar-brand" href="#!">
            <h1>Eshop+</h1>
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
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"><?php echo $count ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php
                    $total = 0.00;
                    foreach ($db as  $pcart) :
                        $total = $total + ($pcart['price'] * $pcart['Qte'])
                    ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $pcart['nameProduct'] . ' X ' . $pcart['Qte'] ?></h6>
                            </div>
                            <span class="text-muted">$ <?php echo $pcart['price'] * $pcart['Qte'] ?></span>
                        </li>
                    <?php endforeach; ?>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$ <?php echo $total ?> </strong>
                    </li>
                </ul>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" method="post">
                    <?php foreach ($db as $key => $cartID) : ?>
                        <input type="hidden" name="product<?php echo $key +1 ?>" value="<?php echo $cartID['idP'] ?>">
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted"></span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" name="country" id="country" required>
                                <option value="">Choose...</option>
                                <option value="United States">United States</option>
                                <option value="Morocco">Morocco</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">

                        <div class="custom-control custom-radio">
                            <input id="debit" name="cod" type="radio" class="custom-control-input" checked>
                            <label class="custom-control-label" for="debit">Cash on delivery</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paypal" type="radio" class="custom-control-input">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" name="checkout" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; ESHOP+</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script>
        $(document).ready(function() {
            $('input[type=radio]').change(function() {
                // When any radio button on the page is selected,
                // then deselect all other radio buttons.
                $('input[type=radio]:checked').not(this).prop('checked', false);
            });
        });​
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[type=radio]").prop("checked", false);
            $("input[type=radio]:first").prop("checked", true);

            $("input[type=radio]").click(function(event) {
                $("input[type=radio]").prop("checked", false);
                $(this).prop("checked", true);

                //event.preventDefault();
            });
        });
    </script>
</body>

</html>