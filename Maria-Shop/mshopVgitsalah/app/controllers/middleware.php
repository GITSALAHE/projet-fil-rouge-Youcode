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