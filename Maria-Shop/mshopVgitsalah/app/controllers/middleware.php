<?php
define('BASE_URL', "http://localhost/eshop");

function adminOnly($redirect = '/views')
{
    if (empty($_SESSION['Admin'])) {
        $_SESSION['message'] = 'You are not authorized';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function userOnly()
{
}

function alreadyLoggedAdmin($redirect = '/backoffice/dashboard.php')
{
    if (!empty($_SESSION['Admin'])) {
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function showCart($redirect = '/views/index.php')
{
    if (empty($_SESSION['idU'])) {
        $_SESSION['message'] = 'please login first or register';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

// function showThankyouPage($redirect = '/views/index.php'){
//     $order = new Order();
//     $lastOrder = $order->getOrderId('orders', ['idU' => $_SESSION['idU']], 'idOrder');
//     if($_GET['idOrder'] != $lastOrder['idOrder']){
//         $_SESSION['message'] = 'unothorized';
//         $_SESSION['type'] = 'error';
//         header('location: ' . BASE_URL . $redirect);
//         exit(0);
//     }
// }