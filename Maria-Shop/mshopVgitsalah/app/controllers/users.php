<?php
function printIt($value)
{
    echo "<pre>", print_r($value), "</pre>";
}

$data = new User();
$table = 'users';


//add new users 

if (isset($_POST['register'])) {
    unset($_POST['register']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    printIt($_POST);
    $add_user = $data->addUser($table, $_POST);
}
