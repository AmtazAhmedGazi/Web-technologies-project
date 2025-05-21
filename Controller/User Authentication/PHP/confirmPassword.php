<?php
session_start();
$email = $_SESSION['email'] ;
if (isset($_POST['confirmPasswordBtn'])) {
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
echo "here";
    $hasUppercase = false;
    $hasLowercase = false;
    $hasNumber = false;

    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];

        if ($char >= 'A' && $char <= 'Z') {
            $hasUppercase = true;
        } elseif ($char >= 'a' && $char <= 'z') {
            $hasLowercase = true;
        } elseif ($char >= '0' && $char <= '9') {
            $hasNumber = true;
        }
    }
    if ($password == "") {
        echo "Password field is empty";
        header('Location: ../../../View/User%20Authentication/confirmPassword.html');

    }
    else if ($confirmPassword == "") {
        echo "Confirm Password field cannot be empty";
        header('Location: ../../../View/User%20Authentication/confirmPassword.html');
    }
   else if (strlen($password) <= 7 || strlen($confirmPassword) <= 7 ){
        echo "Password length must be at least 8 characters";
        header('Location: ../../../View/User%20Authentication/confirmPassword.html');
    }
    else if (!$hasUppercase || !$hasLowercase || !$hasNumber) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, and one number.";
        header('Location: ../../../View/User%20Authentication/confirmPassword.html');
    }

    else if ($password != $confirmPassword) {
        echo "Password Doesn't match";
        header('Location: ../../../View/User%20Authentication/confirmPassword.html');
    } else{
    session_unset();
    session_destroy();
    header('Location: ../../../View/User%20Authentication/login.html');


}
}
else{
    header('Location: ../../../View/User%20Authentication/confirmPassword.html');
}
?>
