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
