<?php 
    error_reporting(E_ALL);
    require_once('../../../Model/userModel.php');
    session_start();

if (isset($_POST["submit"])){
 
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$confirmPassword = trim($_POST["confirmPassword"]);
$email = $_POST["email"];


$hasUppercase = false;
$hasLowercase = false;
$hasNumber = false;

for ($i = 0; $i < strlen($password); $i++) {
    $char = $password[$i];

    if ($char >= 'A' && $char <= 'Z') {
        $hasUppercase = true;
    } else if ($char >= 'a' && $char <= 'z') {
        $hasLowercase = true;
    } else if ($char >= '0' && $char <= '9') {
        $hasNumber = true;
    }
}

       if ($email=="" || $username=="" || $password== "" || $confirmPassword== ""){
          echo "Submission Failed: 'null username/password/email!' ";
          header('Location: ../../../View/User%20Authentication/signUp.html');
        }
       else if (strlen($password) <= 7 || strlen($confirmPassword) <= 7 ){
        echo "Password length must be at least 8 characters";
        header('Location: ../../../View/User%20Authentication/signUp.html');
      }
       else if (!$hasUppercase || !$hasLowercase || !$hasNumber) {
        echo "Password must contain at least one uppercase letter, one lowercase letter, and one number.";
        header('Location: ../../../View/User%20Authentication/signUp.html');
      }

       else if ($password !== $confirmPassword) {
         echo "Password Doesn't match";
         header('Location: ../../../View/User%20Authentication/signUp.html');
      }
       else if(!ctype_alpha($username)){
         echo"Username Invalid";
         header('Location: ../../../View/User%20Authentication/signUp.html');
      }
        else{ 
          $_SESSION['email'] =$email;
          $_SESSION['username'] = $username;

              $user = ['username'=> $username, 'password'=>$password, 'email'=> $email ];
              $status = signup($user);
              if($status){
                  header('location: ../../../View/User%20Authentication/otpEmail.php');
                  echo"Success";
              }else{
                header('Location: ../../../View/User%20Authentication/signUp.html');
              }
            }

}
else {
  header('Location: ../../../View/User%20Authentication/signUp.html');
 }




?>
