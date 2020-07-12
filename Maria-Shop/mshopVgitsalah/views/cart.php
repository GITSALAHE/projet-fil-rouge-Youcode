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

function updateProductCart($table, $qte, $idP)
{
    global $conn;
    $sql = "UPDATE `$table` SET `Qte` = '$qte' WHERE `$table`.`idP` = $idP";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function deleteProductCart($table, $id)
{
    global $conn;
    $sql = ("DELETE FROM `$table` WHERE `$table`.`idP` = $id");
    $res = mysqli_query($conn, $sql);
    return $res;
}

$prodName = "";
$img = "";
$data = selectAll('cart');

if (isset($_GET['del_id'])) {
    $table = 'cart';
    $count = deleteProductCart($table, $_GET['del_id']);
    header("location:cart.php");
    exit();
}

if (isset($_POST['updateCart'])) {
    $table = 'cart';
    $qte = $_POST['qte'];
    $update_id = $_POST['idP'];
    $res = updateProductCart($table, $qte, $update_id);
    header("location:cart.php");
    exit();
}
if (isset($_POST['checkout'])) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                </div>
                                <div class="col-xs-6">
                                    <a href="index.php">
                                        <button type="button" class="btn btn-primary btn-sm btn-block">
                                            <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        <?php
                        $total = 0.00;
                        foreach ($data as $dataCart) :
                            $total = $total + ($dataCart['price'] * $dataCart['Qte'])
                        ?>
                            <form method="POST">
                                <input type="hidden" name="idP" value="<?php echo $dataCart['idP'] ?>">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <img class="img-responsive" src="<?php echo $dataCart['imgUrl'] ?>">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong><?php echo $dataCart['nameProduct'] ?></strong></h4>
                                        <h4><small>Product description</small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-6 text-right">
                                            <h6><strong><?php echo $dataCart['price'] ?><span> $</span><span class="text-muted"> x</span></strong></h6>
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="number" min="1" class="form-control input-sm" name="qte" value="<?php echo $dataCart['Qte'] ?>">
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="http://localhost/eshop/cart.php?del_id=<?php echo $dataCart['idP']; ?>">
                                                <button type="button" class="btn btn-link btn-xs">
                                                    <span class="glyphicon glyphicon-trash"> </span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-xs-2">

                                            <button type="submit" name="updateCart" class="btn btn-link btn-xs">
                                                <span class="glyphicon glyphicon-log-in"> </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        <?php endforeach; ?>


                    </div>
                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9">
                                <h4 class="text-right">Total <strong><?php echo $total . '$' ?></strong></h4>
                            </div>
                            <div class="col-xs-3">
                                <a href="checkout.php">
                                    <input value="Checkout" name="checkout" class="btn btn-success btn-block">
                                </a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

</html>