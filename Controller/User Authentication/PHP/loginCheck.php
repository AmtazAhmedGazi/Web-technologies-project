<?php
error_reporting(E_ALL);
require_once('../../../Model/userModel.php');
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "" || $password == "") {
        echo "Email or password cannot be empty!";
        header('Location: ../../../View/User%20Authentication/login.html');

    } else {
        $user = ['username' => $username, 'password' => $password];
        $status = login($user);

        if ($status) {
            setcookie('status', 'true', time() + 3000, '/');
            $_SESSION['user'] = ['username'=> $username ];
            header('Location: ../../../View/Activity%20Feed/homepage.html');

        } else {
            header('Location: ../../../View/User%20Authentication/login.html
            ');

        }
    }
  }
 else {
    header('Location: ../../../View/User%20Authentication/login.html');

}
?>