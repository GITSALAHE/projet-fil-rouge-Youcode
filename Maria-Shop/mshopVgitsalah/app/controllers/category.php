<?php
$table = 'category';

//add category
$data = new Category();
if (isset($_POST['addCategory'])) {
    unset($_POST['addCategory']);
    printIt($_POST);

    $add_cat = $data->addCategory($table, $_POST);
}

//update category 

if (isset($_POST['editCategory'])) {
    $id = $_POST['idC'];
    unset($_POST['editCategory'], $_POST['idC']);

    $add_cat = $data->update($table, $id, $_POST);
   
}
