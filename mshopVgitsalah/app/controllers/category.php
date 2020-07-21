<?php

$crud = new CRUD();
$table = 'category';
$idName = 'idC';
//showing 
$data = $crud->selectAll($table);
$errors = array();


//add category
if (isset($_POST['addCategory'])) {
    $errors = validateCategory($_POST);
    if (count($errors) == 0) {
        unset($_POST['addCategory']);
        $add_cat = $crud->create($table, $_POST);
        header('location:index.php');
        exit();
    }
}
//end add category



//update category 
$idC = '';
$dataname = '';
if (isset($_GET['edit_idC'])) {
    $idC = $_GET['edit_idC'];
    $nameCategory = $crud->selectOne($table, ['idC' => $idC]);
    $dataname = $nameCategory['nameCategory'];
}

$errorsEdit = array();
if (isset($_POST['editCategory'])) {

    $errorsEdit = validateEditCategory($_POST);

    if (count($errorsEdit) == 0) {
        $id = $_POST['idC'];
        unset($_POST['editCategory'], $_POST['idC']);
        $updatecat = $crud->update($table, $id, $_POST, $idName);
        header('location:index.php');
        exit();
    }
}
//end update category


//delete category 
if (isset($_GET['delete_ctg'])) {
    $delete = $crud->delete($table, $idName, $_GET['delete_ctg']);
    header('location:index.php');
    exit();
}
//end delete category 

//showing categories in navbar 
$navbar_categories = $crud->selectAll('category');


//showing product in category page 

if (isset($_GET['categoryId'])) {
   
    $showing_product_inCategory = $crud->selectAll('product', ['idC' => $_GET['categoryId']]);
    
}
