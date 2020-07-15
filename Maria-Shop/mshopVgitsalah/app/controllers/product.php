<?php
$crud = new CRUD();
$table = 'product';




//adding sizes to db
$errorAddSize = array();
if (isset($_POST['addSize'])) {
    $errorAddSize = validateAddSize($_POST);
    if (count($errorAddSize) == 0) {
        unset($_POST['addSize']);
        $add_size = $crud->create('size', $_POST);
        header('location:manageSize.php');
        exit();
    }
}
//end adding sizes to db 

//manage sizes 
$manage_sizes = $crud->selectAll('size');
//end manage sizes

//editing sizes 
$errorsEdit = array();
$sizename = '';
if (isset($_GET['editSizeId'])) {
    $getsize = $crud->selectOne('size', ['idSize' => $_GET['editSizeId']]);
    $sizename = $getsize['nameSize'];
}

if (isset($_POST['editSize'])) {
    $errorsEdit = validateEditSize($_POST);
    if (count($errorsEdit) == 0) {
        $idSize = $_POST['idSize'];
        unset($_POST['editSize'], $_POST['idSize']);
        $update_size = $crud->update('size', $idSize, $_POST, 'idSize');
        header('location:manageSize.php');
        exit();
    }
}
//end editing sizes

//deleting sizes
if (isset($_GET['del_idS'])) {
    $del_size = $crud->delete('size', 'idSize', $_GET['del_idS']);
    header('location:manageSize.php');
    exit();
}

//end deleting sizes

//selecting all categories and sizes from DATABASE 
$categories_product = $crud->selectAll('category');
$sizes = $crud->selectAll('size');
//end selecting categories and sizes



//add product
$errorsProduct = array();
if (isset($_POST['addProduct'])) {
    $errorsProduct = validateAddProduct($_POST);

    if (!empty($_FILES['Image']['name'])) {
        $image_name = time() . '_' . $_FILES['Image']['name'];
        $destination = "../../assets/img/" . $image_name;

        $result =   move_uploaded_file($_FILES['Image']['tmp_name'], $destination);

        if ($result) {
            $_POST['Image'] = $image_name;
        } else {
            array_push($errorsProduct, "failed to upload image");
        }
    } else {
        array_push($errorsProduct, 'Post image requiered');
    }

    if (count($errorsProduct) == 0) {
        printIt($_POST);
        unset($_POST['addProduct']);
        $add_product = $crud->create($table, $_POST);
        header('location:index.php');
        exit();
    }
}

//end add product 


//manage product 
$showing_product = $crud->selectAll($table);
//end manage product 


//edit Product 
$name_edit_product = '';
$price_edit = '';
$qte_edit = '';
$size_edit = '';
$category_edit = '';
$idP_edit = '';
if (isset($_GET['idModPr'])) {
    $get_data_product = $crud->selectOne($table, ['idP' => $_GET['idModPr']]);
    $idP_edit = $get_data_product['idP'];
    $name_edit_product = $get_data_product['nameProduct'];
    $price_edit = $get_data_product['Price'];
    $qte_edit = $get_data_product['Qte'];
    $category_edit = $get_data_product['idC'];
}


$errorsEditProduct = array();

if (isset($_POST['editProduct'])) {
    $errorsEditProduct = validateEditProduct($_POST);
    if (!empty($_FILES['Image']['name'])) {
        $image_name = time() . '_' . $_FILES['Image']['name'];
        $destination = "../../assets/img/" . $image_name;

        $result =   move_uploaded_file($_FILES['Image']['tmp_name'], $destination);

        if ($result) {
            $_POST['Image'] = $image_name;
        } else {
            array_push($errorsProduct, "failed to upload image");
        }
    } else {
        array_push($errorsProduct, 'Post image requiered');
    }
    if (count($errorsEditProduct) == 0) {

        $idProduct = $_POST['idP'];
        unset($_POST['editProduct'], $_POST['idP']);
        $crud->update($table, $idProduct, $_POST, 'idP');
        header('location:index.php');
        exit();
    }
}
//end edit product 

//delete product

if (isset($_GET['del_pr'])) {
    $idDelproduct = $_GET['del_pr'];
    $crud->delete($table, 'idP', $idDelproduct);
    header('location:index.php');
    exit();
}
//end delete product 