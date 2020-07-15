<?php


$crud = new CRUD();
$table = 'users';
$errorRegister = array();
$errorLogin = array();
//add new users 

if (isset($_POST['register'])) {
    $errorRegister = validateUserRegister($_POST);
    if (count($errorRegister) == 0) {
        unset($_POST['register']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        printIt($_POST);
        $add_user = $crud->create($table, $_POST);
    }
}


//login user 



if (isset($_POST['login'])) {
    $errorLogin = validateUserLogin($_POST);
    if (count($errorLogin) == 0) {
        $user = $crud->selectOne($table, ['email' => $_POST['email']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errorLogin, 'wrong login');
        }
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



//Login admin 
function loginAdmin($user)
{
    $_SESSION['idU'] = $user['idU'];
    $_SESSION['Admin'] = $user['fullname'];
    $_SESSION['message'] = 'YOU ARE NOW LOGGED IN';
    $_SESSION['type'] = 'success';
    header('location:dashboard.php');
    exit();
}
if (isset($_POST['loginAdmin'])) {
    $loginAdmin = $crud->selectOne($table, ['fullname' => $_POST['username'], 'admin' => 1]);

    if ($loginAdmin && $_POST['password'] == $loginAdmin['password']) {
        loginAdmin($loginAdmin);
    }
}
