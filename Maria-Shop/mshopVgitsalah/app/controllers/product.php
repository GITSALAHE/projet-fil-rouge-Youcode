<?php
$crud = new CRUD();
$table = 'product';



//selecting all categories and sizes from DATABASE for editing or adding product
$categories_product = $crud->selectAll('category');
$sizes = $crud->selectAll('size');
//end selecting categories and sizes for editing or adding product



//add product
$errorsProduct = array();
if (isset($_POST['addProduct'])) {
    $errorsProduct = validateAddProduct($_POST);

    //push image 1
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
        array_push($errorsProduct, 'Post image 1 requiered');
    }
    
    //push image 2
    if (!empty($_FILES['Image2']['name'])) {
        $image_name = time() . '_' . $_FILES['Image2']['name'];
        $destination = "../../assets/img/" . $image_name;

        $result =   move_uploaded_file($_FILES['Image2']['tmp_name'], $destination);

        if ($result) {
            $_POST['Image2'] = $image_name;
        } else {
            array_push($errorsProduct, "failed to upload image");
        }
    } 
    else {
        array_push($errorsProduct, 'Post image 2 requiered');
    }

    if (count($errorsProduct) == 0) {
        $_POST['description'] = htmlentities($_POST['description']);
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
    //push image 1
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
        array_push($errorsProduct, 'Post image 1 requiered');
    }
    
    //push image 2
    if (!empty($_FILES['Image2']['name'])) {
        $image_name = time() . '_' . $_FILES['Image2']['name'];
        $destination = "../../assets/img/" . $image_name;

        $result =   move_uploaded_file($_FILES['Image2']['tmp_name'], $destination);

        if ($result) {
            $_POST['Image2'] = $image_name;
        } else {
            array_push($errorsProduct, "failed to upload image");
        }
    } 
    else {
        array_push($errorsProduct, 'Post image 2 requiered');
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
    $crud->delete('size_product', 'idP', $idDelproduct);
    $crud->delete($table, 'idP', $idDelproduct);
    header('location:index.php');
    exit();
}
//end delete product 


//showing product in sigleproduc.php 
$nameProduct = '';
$priceProduct = '';
$image1 = '';
$image2 = '';
if(isset($_GET['singleIdP'])){
    $singleProduct = $crud->selectOne($table, ['idP' => $_GET['singleIdP']]);
    $nameProduct = $singleProduct['nameProduct'];
    $priceProduct = $singleProduct['Price'];
    $image1 = $singleProduct['Image'];
    $image2 = $singleProduct['Image2'];
    $sizeProduct = $crud->selectAll('size_product', ['idP' => $_GET['singleIdP']]);
    
}