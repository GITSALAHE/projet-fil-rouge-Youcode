<?php

$crud = new CRUD();

//counting categories 

$category = $crud->selectAll('category');

$count_category = count($category);


//counting products 

$product = $crud->selectAll('product');

$count_product = count($product);


//counting orders 

$orders = $crud->selectAll('orders');

$count_orders = count($orders);


//counting users 

$users = $crud->selectAll('users');

$count_users = count($users);
