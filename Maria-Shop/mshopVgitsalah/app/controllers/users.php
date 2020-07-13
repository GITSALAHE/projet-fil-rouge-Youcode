<?php


$data = new User();
$table = 'users';


//add new users 

if (isset($_POST['register'])) {
    unset($_POST['register']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    printIt($_POST);
    $add_user = $data->addUser($table, $_POST);
}


//login user 



if (isset($_POST['login'])) {

    $user = $data->login($table, ['email' => $_POST['email']]);
    printIt($user);
    if ($user && password_verify($_POST['password'], $user['password'])) {
        loginUser($user);
    } else {
    }
}
function loginUser($user)
{
    $_SESSION['idU'] = $user['idU'];
    $_SESSION['message'] = 'YOU ARE NOW LOGGED IN';
    $_SESSION['type'] = 'success';
    header('location:index.php');
    exit();
}
