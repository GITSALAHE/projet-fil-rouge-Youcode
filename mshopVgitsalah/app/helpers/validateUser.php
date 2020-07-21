<?php
function validateUserRegister($post)
{
    $crud = new CRUD();
    $errorRegister = array();


    //Require name   
    if (empty($post['fullname'])) {
        array_push($errorRegister, 'full name is required');
    }

    //Require email  
    if (empty($post['email'])) {
        array_push($errorRegister, 'email is required');
    }
    //Require password  
    if (empty($post['password'])) {
        array_push($errorRegister, 'password is required');
    }
    //Require phone number 
    if (empty($post['phone_number'])) {
        array_push($errorRegister, 'phone number is required');
    }

    //checking if there is an exist email 
    $existingMailR  = $crud->selectOne('users', ['email' => $post['email']]);
    // LET S BLOCK THE PROCESS
    if ($existingMailR == true) {
        if (isset($post['addProduct'])) {
            array_push($errorRegister, 'this email already sign up');
        }
    }
    return $errorRegister;
}

function validateUserLogin($post)
{
    $crud = new CRUD();
    $errorLogin = array();

    //Require email  
    if (empty($post['email'])) {
        array_push($errorLogin, 'email is required');
    }
    //Require password  
    if (empty($post['password'])) {
        array_push($errorLogin, 'password is required');
    }


    return $errorLogin;
}

function validateAdminLogin($post)
{
    $crud = new CRUD();
    $errorLoginAdmin = array();

    //Require email  
    if (empty($post['username'])) {
        array_push($errorLoginAdmin, 'username is required');
    }
    //Require password  
    if (empty($post['password'])) {
        array_push($errorLoginAdmin, 'password is required');
    }


    return $errorLoginAdmin;
}
